class User < ActiveRecord::Base
  attr_accessible :message, :phone, :email, :name, :subject
  validates :name, :presence => true
  validates :message, :presence => true
  validates :phone, :presence => true
  validates :email,:presence => true
end
