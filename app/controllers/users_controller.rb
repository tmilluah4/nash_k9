class UsersController < ApplicationController
  def show
    @user = User.find(params[:id])
  end

  def new
    @user = User.new
  end

  def create
    @user = User.new(params[:user])

    if verify_recaptcha(request.remote_ip, params)[:status] == 'false'
      @notice = "captcha incorrect"
      respond_to do |format|
        #flash[:alert] = "The CAPTCHA solution was incorrect. Please re-try"
        format.html { render :action => "new" }
        #flash[:alert] = "The CAPTCHA solution was incorrect. Please re-try"
         format.xml  { render :xml => @user.errors, :status => :unprocessable_entity }
      end
    elsif
      respond_to do |format|
        if @user.save
          UserMailer.signup_confirmation(@user).deliver
          format.html { redirect_to  @user, notice: "Signed up successfully." }
        else
          format.html { render :action => "new" }
        end
      end
    end
  end

end
