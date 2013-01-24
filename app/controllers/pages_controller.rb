class PagesController < ApplicationController

  protect_from_forgery

  def home

  end

  def training_videos

  end

  def contact

  end

  def dogs
    session[:oauth] = Koala::Facebook::OAuth.new(APP_ID, APP_SECRET, SITE_URL + '/gallery')
    @auth_url =  session[:oauth].url_for_oauth_code(:permissions=>"read_stream")
    #this will expire in 2 months from Jan 21, 2013
    #http://stackoverflow.com/questions/12706228/how-do-i-get-a-page-access-token-that-does-not-expire/12706468#12706468
    #replace fb_exchange_token at end of string to get new one
    #https://graph.facebook.com/oauth/access_token?%20client_id=384540454954612&%20client_secret=5cad8eb3f2b7211c13574a6a31919b80&%20grant_type=fb_exchange_token&%20fb_exchange_token=AAAFdvM04JnQBAPVOZCJ6ShfZCva7g0jA8xxdOERKdLc0wBDt0vqfZALOyYaXfTg0qyZB9MMpFpZAb5PGjZC25YRq7OZBzKDe4Fof6Q1XhZArowZDZD
    @api = Koala::Facebook::API.new("AAAFdvM04JnQBAPVOZCJ6ShfZCva7g0jA8xxdOERKdLc0wBDt0vqfZALOyYaXfTg0qyZB9MMpFpZAb5PGjZC25YRq7OZBzKDe4Fof6Q1XhZArowZDZD")
    @dogs =  @api.rest_call("fql.multiquery", {:queries => {
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
            "94" => "SELECT src_big FROM photo WHERE aid = '100000256514752_128350'  LIMIT 10"
    }.to_json})

    @dog_cover = @api.rest_call("fql.multiquery", {:queries => {
        "query1" => "select aid, cover_pid, photo_count, name from album where owner = me() and photo_count > 0  order by created desc",
        "query2" => "select src_big from photo where pid in (select cover_pid from #query1)"
    }.to_json})
  end

  def gallery
    session[:oauth] = Koala::Facebook::OAuth.new(APP_ID, APP_SECRET, SITE_URL + '/gallery')
    @api = Koala::Facebook::API.new("AAAFdvM04JnQBAPVOZCJ6ShfZCva7g0jA8xxdOERKdLc0wBDt0vqfZALOyYaXfTg0qyZB9MMpFpZAb5PGjZC25YRq7OZBzKDe4Fof6Q1XhZArowZDZD")
    @albums = @api.rest_call("fql.multiquery", {:queries => {
        "query1" => "select aid, cover_pid, photo_count, name from album where owner = me() and photo_count > 0  order by created desc",
        "query2" => "select src_big from photo where pid in (select cover_pid from #query1)"
    }.to_json})
  end

  def album
    session[:oauth] = Koala::Facebook::OAuth.new(APP_ID, APP_SECRET, SITE_URL + '/gallery')
    @api = Koala::Facebook::API.new("AAAFdvM04JnQBAPVOZCJ6ShfZCva7g0jA8xxdOERKdLc0wBDt0vqfZALOyYaXfTg0qyZB9MMpFpZAb5PGjZC25YRq7OZBzKDe4Fof6Q1XhZArowZDZD")
    @aid =  params[:id]
    @album1  = @api.fql_query("SELECT src_big,src FROM photo WHERE aid = '#{@aid}'" )
  end

end

