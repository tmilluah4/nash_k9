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

    @api = Koala::Facebook::API.new("AAAFdvM04JnQBAPVOZCJ6ShfZCva7g0jA8xxdOERKdLc0wBDt0vqfZALOyYaXfTg0qyZB9MMpFpZAb5PGjZC25YRq7OZBzKDe4Fof6Q1XhZArowZDZD")
    @aid =  params[:id]

      @dogs =    @api.rest_call("fql.multiquery", {:queries => {
          "1" => "SELECT src_big FROM photo WHERE aid = '100000256514752_124391'"
      }.to_json})

      @dog_cover = @api.rest_call("fql.multiquery", {:queries => {
          "query1" => "select aid, cover_pid, photo_count, name from album where owner = me() and photo_count > 0  order by created desc",
          "query2" => "select src_big from photo where pid in (select cover_pid from #query1)"}
      .to_json})
  end

  def pet_first_aid

  end

  def police_dogs

  end

  def search_and_rescue

  end
end