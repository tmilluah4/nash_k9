class User < ActiveRecord::Base
  attr_accessible :message, :phone, :email, :name, :subject
end
