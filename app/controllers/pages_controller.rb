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

     @api = Koala::Facebook::API.new("AAAFdvM04JnQBAMZBmVuYMWes5rrYBmqWXOmhkPjQpenbbZA2qC3Yqq2acC0brNxru91nqj6ZCvdle9ZCeGaTo9Ndd5VwvlvmI0Uj79CkYwZDZD")
    begin
      @stream  = @graph_data = @api.get_object("/me/statuses", "fields"=>"message")

    rescue Exception=>ex
      puts ex.message
    end

    respond_to do |format|
      format.html {   }
    end

  end

  def dogs

  end

  def training_videos

  end

  def contact

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

    @api = Koala::Facebook::API.new("AAAFdvM04JnQBAMZBmVuYMWes5rrYBmqWXOmhkPjQpenbbZA2qC3Yqq2acC0brNxru91nqj6ZCvdle9ZCeGaTo9Ndd5VwvlvmI0Uj79CkYwZDZD")
    begin
      @album_graph_cover  = @api.fql_query("SELECT src_big,src FROM photo WHERE aid = '100000256514752_123407' LIMIT 1" )
      @album_graph  = @api.fql_query("SELECT src_big,src FROM photo WHERE aid = '100000256514752_123407'" )
      @graph2_cover = @api.fql_query("SELECT  src_big,src FROM photo WHERE aid = '100000256514752_122372'  LIMIT 1" )
      @graph2 = @api.fql_query("SELECT  src_big,src FROM photo WHERE aid = '100000256514752_122372'" )
    rescue Exception=>ex
      puts ex.message
    end

    respond_to do |format|
      format.html {   }
    end


  end

end


def index
  session[:oauth] = Koala::Facebook::OAuth.new(APP_ID, APP_SECRET, SITE_URL + '/home/callback')
  @auth_url =  session[:oauth].url_for_oauth_code(:permissions=>"read_stream")
  puts session.to_s + "<<< session"

  respond_to do |format|
    format.html {  }
  end
end

def callback
  session[:oauth] = Koala::Facebook::OAuth.new(APP_ID, APP_SECRET, SITE_URL + '/home/callback')
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

  @api = Koala::Facebook::API.new(session[:access_token])
  begin
    @album_graph  = @api.fql_query("SELECT  src_big,src FROM photo WHERE aid = '100000256514752_123407'" )

  rescue Exception=>ex
    puts ex.message
  end

  respond_to do |format|
    format.html {   }
  end


end