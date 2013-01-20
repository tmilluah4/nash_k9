class PagesController < ApplicationController

  protect_from_forgery

  def home
    session[:oauth] = Koala::Facebook::OAuth.new(APP_ID, APP_SECRET, SITE_URL)
    @auth_url =  session[:oauth].url_for_oauth_code(:permissions=>"read_stream")
    puts session.to_s + "<<< session"
    respond_to do |format|
      format.html {  }
    end
    if params[:code]
      # acknowledge code and get access token from FB
      session[:access_token] = session[:oauth].get_access_token(params[:code])
    end
    # auth established, now do a graph call:
     @api = Koala::Facebook::API.new("AAACEdEose0cBANMEWb9IrjuJsbcEZArwTJyIsZC1DkdpknkiLzWmGXcEZAy3ffEZBFtVwdHZAnrXo4ROSHLVx7dxGJJJBqcvNupRGXH0lFXnUmGRskZCjl")
    begin
      @stream  = @graph_data = @api.get_object("/me/statuses", "fields"=>"message")

    rescue Exception=>ex
      puts ex.message
    end
    respond_to do |format|
      format.html {   }
    end
  end

  def training_videos

  end

  def dogs
    session[:oauth] = Koala::Facebook::OAuth.new(APP_ID, APP_SECRET, SITE_URL + '/dogs')
    @auth_url =  session[:oauth].url_for_oauth_code(:permissions=>"read_stream")
    puts session.to_s + "<<< session"

    respond_to do |format|
      format.html {  }
    end

    if params[:code]
      # acknowledge code and get access token from FB
      session[:access_token] = session[:oauth].get_access_token(params[:code])
    end

    @api = Koala::Facebook::GraphAndRestAPI.new(session[:access_token])
    @aid =  params[:id]
    begin
      @dogs =    @api.rest_call("fql.multiquery", {:queries => {
                        "1" => "SELECT src_big FROM photo WHERE aid = '100000256514752_124308'",
                        "2" => "select src_big from photo where aid = '100000256514752_53171' LIMIT 10",
                        "3" => "SELECT src_big FROM photo WHERE aid = '100000256514752_124390' LIMIT 10",
                        "4" => "SELECT src_big FROM photo WHERE aid = '100000256514752_124309' LIMIT 10",
                        "5" => "SELECT src_big FROM photo WHERE aid = '100000256514752_124327' LIMIT 10",
                        "6" => "SELECT src_big FROM photo WHERE aid = '100000256514752_124329' LIMIT 10",
                        "7" => "SELECT src_big FROM photo WHERE aid = '100000256514752_124332' LIMIT 10",
                        "8" => "SELECT src_big FROM photo WHERE aid = '100000256514752_81130' LIMIT 10",
                        "80" => "SELECT src_big FROM photo WHERE aid = '100000256514752_81273' LIMIT 10",
                        "81" => "SELECT src_big FROM photo WHERE aid = '100000256514752_124322' LIMIT 10",
                        "82" => "SELECT src_big FROM photo WHERE aid = '100000256514752_124397' LIMIT 10",
                        "83" => "SELECT src_big FROM photo WHERE aid = '100000256514752_10841' LIMIT 10",
                        "84" => "SELECT src_big FROM photo WHERE aid = '100000256514752_124393' LIMIT 10",
                        "85" => "SELECT src_big FROM photo WHERE aid = '100000256514752_124307' LIMIT 10",
                        "86" => "SELECT src_big FROM photo WHERE aid = '100000256514752_124317' LIMIT 10",
                        "87" => "SELECT src_big FROM photo WHERE aid = '100000256514752_124311' LIMIT 10",
                        "88" => "SELECT src_big FROM photo WHERE aid = '100000256514752_6829' LIMIT 10",
                        "89" => "SELECT src_big FROM photo WHERE aid = '100000256514752_124310' LIMIT 10",
                        "90" => "SELECT src_big FROM photo WHERE aid = '100000256514752_124305' LIMIT 10",
                        "91" => "SELECT src_big FROM photo WHERE aid = '100000256514752_124314' LIMIT 10",
                        "92" => "SELECT src_big FROM photo WHERE aid = '100000256514752_124315' LIMIT 10",
                        "93" => "SELECT src_big FROM photo WHERE aid = '100000256514752_124316'  LIMIT 10",
                        "94" => "SELECT src_big FROM photo WHERE aid = '100000256514752_128350'  LIMIT 10"}.to_json})

      @dog_cover = @api.rest_call("fql.multiquery", {:queries => {
          "query1" => "select aid, cover_pid, photo_count, name from album where owner = me() and photo_count > 0  order by created desc",
          "query2" => "select src_big from photo where pid in (select cover_pid from #query1)   "}.to_json})

    rescue Exception=>ex
      puts ex.message
    end

    respond_to do |format|
      format.html {   }
    end
  end



  def contact

  end

  def album
    session[:oauth] = Koala::Facebook::OAuth.new(APP_ID, APP_SECRET, SITE_URL + '/gallery')
    @auth_url =  session[:oauth].url_for_oauth_code(:permissions=>"read_stream")
    puts session.to_s + "<<< session"
    respond_to do |format|
      format.html {  }
    end
    if params[:code]
      # acknowledge code and get access token from FB
      session[:access_token] = session[:oauth].get_access_token(params[:code])
    end
    @api = Koala::Facebook::GraphAndRestAPI.new(session[:access_token])
    @aid =  params[:id]
    begin
      @album1  = @api.fql_query("SELECT src_big,src FROM photo WHERE aid = '#{@aid}'" )

    rescue Exception=>ex
      puts ex.message
    end

    respond_to do |format|
      format.html {   }
    end
  end

  def gallery
    session[:oauth] = Koala::Facebook::OAuth.new(APP_ID, APP_SECRET, SITE_URL + '/gallery')
    @auth_url =  session[:oauth].url_for_oauth_code(:permissions=>"read_stream")
    puts session.to_s + "<<< session"

    respond_to do |format|
      format.html {  }
    end

    if params[:code]
      # acknowledge code and get access token from FB
      session[:access_token] = session[:oauth].get_access_token(params[:code])
    end

    # auth established, now do a graph call:

    @api = Koala::Facebook::GraphAndRestAPI.new(session[:access_token])

    begin
           @albums = @api.rest_call("fql.multiquery", {:queries => {
               "query1" => "select aid, cover_pid, photo_count, name from album where owner = me() and photo_count > 0  order by created desc",
               "query2" => "select src_big from photo where pid in (select cover_pid from #query1)   "}.to_json})

    rescue Exception=>ex
      puts ex.message
    end

    respond_to do |format|
      format.html {   }
    end

  end

end

