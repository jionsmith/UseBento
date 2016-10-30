Rails.application.configure do
  # Settings specified here will take precedence over those in config/application.rb.

  # In the development environment your application's code is reloaded on
  # every request. This slows down response time but is perfect for development
  # since you don't have to restart the web server when you make code changes.
  config.cache_classes = false

  config.action_mailer.default_url_options = { :host => 'localhost:3000' }
  config.action_mailer.delivery_method = :smtp
   config.action_mailer.smtp_settings = {
     :authentication => :plain,
     :address => "smtp.mailgun.org",
     :port => 587,
     :domain => "sandboxc84676d0390645d2abda73fd1b5115fd.mailgun.org",
     :user_name => "postmaster@sandboxc84676d0390645d2abda73fd1b5115fd.mailgun.org",
     :password => "95eyypl176p8"
   }

#  config.action_mailer.smtp_settings = { :address => 'localhost', :port => 1025 }

  config.twocheckout_private_key = ENV['TWOCHECKOUT_PRIVATE_KEY']
  config.twocheckout_public_key  = '7EB9463F-A64C-4CF5-9B49-912A9912E3D7'
  config.twocheckout_seller_id   = 901261089
  config.twocheckout_sandbox     = true

  config.gmail_imap_username     = 'email@usebento.com'
  config.gmail_imap_password     = '2015Crush'

  # Do not eager load code on boot.
  config.eager_load = false

  # Show full error reports and disable caching.
  config.consider_all_requests_local       = true
  config.action_controller.perform_caching = false

  # Don't care if the mailer can't send.
  config.action_mailer.raise_delivery_errors = false

  # Print deprecation notices to the Rails logger.
  config.active_support.deprecation = :log

  # Debug mode disables concatenation and preprocessing of assets.
  # This option may cause significant delays in view rendering with a large
  # number of complex assets.
  config.assets.debug = true

  # Adds additional error checking when serving assets at runtime.
  # Checks for improperly declared sprockets dependencies.
  # Raises helpful error messages.
  config.assets.raise_runtime_errors = true

  # Raises error for missing translations
  # config.action_view.raise_on_missing_translations = true

  config.middleware.delete Rack::Lock

  # CarrierWave.configure do |config|
  #              config.storage = :grid_fs
  #              config.root = Rails.root.join('tmp')
  #              config.cache_dir = "uploads"
  #            end
end

WebsocketRails.setup do |config|
  config.standalone = false
  config.synchronize = false
  config.broadcast_subscriber_events = true
end
