class UserMailer < ActionMailer::Base
  default from: "railscasts@example.com"

  def signup_confirmation(user)
    @user = user

    mail to: "nashvillek9@gmail.com", subject: "Sign Up Confirmation"
  end
end
