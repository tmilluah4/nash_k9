class UserMailer < ActionMailer::Base
  default from: "railscasts@example.com"

  def signup_confirmation(user)
    @user = user

    mail to: "ali@nashvillek9.com", subject: "Sign Up Confirmation"
  end
end
