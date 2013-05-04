class HomeController < ActionController::Base
  protect_from_forgery


  def callback
    session[:oauth] = Koala::Facebook::OAuth.new(APP_ID, APP_SECRET, SITE_URL + '/home/callback')
    @auth_url =  session[:oauth].url_for_oauth_code(:permissions=>"read_stream")
    puts session.to_s + "<<< session"

    respond_to do |format|
      format.html {  }
    end
    respond_to do |format|
      format.html {  }
    end

    if params[:code]
      # acknowledge code and get access token from FB
      session[:access_token] = session[:oauth].get_access_token(params[:code])
    end

    # auth established, now do a graph call:

    @api = Koala::Facebook::API.new("BAAFdvM04JnQBAN7sENu4EQUO3SWKWotgC74kAL7r29KGLeWaLEeHTIeT2BoCZCZALCsfbGbWVPVWrLKQyZAVQdX5d0hPdoEE5k6BHCSVPN6UZBzsydoP1IHzYkdm1kfcjxG7VRvSmRK3UmBzaPonfvx13Ofv4Bk1rhKqj2cDWYbVAIhs8T4rMox2PurccCZAM4gxU9PFI8K28iZARlPfMZC")
    begin
      @album_graph  = @api.fql_query("SELECT  src_big,src FROM photo WHERE aid = '100000256514752_123407'" )

    rescue Exception=>ex
      puts ex.message
    end

    respond_to do |format|
      format.html {   }
    end


  end
end

