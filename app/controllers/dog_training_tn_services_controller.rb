class DogTrainingTnServicesController < ApplicationController
  protect_from_forgery

  def index

  end

  def nashville_dog_training_programs

  end

  def executive_protection_dogs

  end

  def detection_dogs

  end

  def hunting_dogs
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

    # auth established, now do a graph call:

    @api = Koala::Facebook::API.new("AAAFdvM04JnQBAMZBmVuYMWes5rrYBmqWXOmhkPjQpenbbZA2qC3Yqq2acC0brNxru91nqj6ZCvdle9ZCeGaTo9Ndd5VwvlvmI0Uj79CkYwZDZD")
    @aid =  params[:id]
    begin
      @dogs =    @api.rest_call("fql.multiquery", {:queries => {
          "1" => "SELECT src_big FROM photo WHERE aid = '100000256514752_124391'", }.to_json})

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

  def pet_first_aid

  end

  def police_dogs

  end

  def search_and_rescue

  end
end