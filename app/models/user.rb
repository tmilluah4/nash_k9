class User < ActiveRecord::Base
  attr_accessible :comment, :phone, :email, :name, :subject
end
