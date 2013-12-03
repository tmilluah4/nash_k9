require File.expand_path('../boot', __FILE__)

require 'rails/all'
#if Rails.env == "production"
#  config.middleware.use("Rack::GoogleAnalytics", :web_property_id => "UA-9281447-1")
#end
if defined?(Bundler)
  # If you precompile assets before deploying to production, use this line
  Bundler.require(*Rails.groups(:assets => %w(development test)))
  # If you want your assets lazily compiled in production, use this line
  # Bundler.require(:default, :assets, Rails.env)
end

module NashK9
  class Application < Rails::Application

    ###### DIRECTIONS FOR GETTING NEW KEY ###############
    # this will expire in 2 months from July 27, 2013
    # http://stackoverflow.com/questions/12706228/how-do-i-get-a-page-access-token-that-does-not-expire/12706468#12706468

    # get new access token from https://developers.facebook.com/tools/explorer/384540454954612/?method=GET&path=100000256514752%3Ffields%3Did%2Cname
    # make sure it is the "test" app
    # paste it at end of line below and go the url...it will generate the new one to use....replace the old api keys with this new key
    # https://graph.facebook.com/oauth/access_token?%20client_id=384540454954612&%20client_secret=5cad8eb3f2b7211c13574a6a31919b80&%20grant_type=fb_exchange_token&%20fb_exchange_token=

  $api = Koala::Facebook::API.new("CAAFdvM04JnQBAA2yjSv9LX86nKrhx5DzfIi09cZAQF3s1JsiS0qCACY23eP6ikhBFn4FZBeoHlGJXyIWLCHmXm2LVRadS4Au1DqEM804ZCSQpr3ZCBY8q4EXZAIS8B5SmYJD7b7cUGLLExmZAmL5JNpQPdJMVZAnUrCa2HM6lD323koGn8R5gRQIvZBE9PvshnaRJb4m9vQm17NmHi4czgk2CiH4n3fdnpkZD&expires=5183512")


    # Settings in config/environments/* take precedence over those specified here.
    # Application configuration should go into files in config/initializers
    # -- all .rb files in that directory are automatically loaded.

    # Custom directories with classes and modules you want to be autoloadable.
    # config.autoload_paths += %W(#{config.root}/extras)

    # Only load the plugins named here, in the order given (default is alphabetical).
    # :all can be used as a placeholder for all plugins not explicitly named.
    # config.plugins = [ :exception_notification, :ssl_requirement, :all ]

    # Activate observers that should always be running.
    # config.active_record.observers = :cacher, :garbage_collector, :forum_observer

    # Set Time.zone default to the specified zone and make Active Record auto-convert to this zone.
    # Run "rake -D time" for a list of tasks for finding time zone names. Default is UTC.
    # config.time_zone = 'Central Time (US & Canada)'

    # The default locale is :en and all translations from config/locales/*.rb,yml are auto loaded.
    # config.i18n.load_path += Dir[Rails.root.join('my', 'locales', '*.{rb,yml}').to_s]
    # config.i18n.default_locale = :de

    # Configure the default encoding used in templates for Ruby 1.9.
    config.encoding = "utf-8"

    # Configure sensitive parameters which will be filtered from the log file.
    config.filter_parameters += [:password]

    # Enable escaping HTML in JSON.
    config.active_support.escape_html_entities_in_json = true

    # Use SQL instead of Active Record's schema dumper when creating the database.
    # This is necessary if your schema can't be completely dumped by the schema dumper,
    # like if you have constraints or database-specific column types
    # config.active_record.schema_format = :sql

    # Enforce whitelist mode for mass assignment.
    # This will create an empty whitelist of attributes available for mass-assignment for all models
    # in your app. As such, your models will need to explicitly whitelist or blacklist accessible
    # parameters by using an attr_accessible or attr_protected declaration.
    config.active_record.whitelist_attributes = true

    # Enable the asset pipeline
    config.assets.enabled = true

    # Version of your assets, change this if you want to expire all your assets


  end
end
