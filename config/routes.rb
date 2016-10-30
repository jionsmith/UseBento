Rails.application.routes.draw do
  devise_for :users, :controllers => {:registrations => "registrations"}
  get  'services/select'
  get  'services/add'
  get  'projects/new/:name',                  to: 'services#create',      as: 'service'

  get  'projects/start',             to: 'projects#start'
  post 'projects/finish_start',               to: 'projects#finish_start'
  post 'projects/submit_start',               to: 'projects#submit_start'
  get  'projects/list',                       to: 'projects#list'
  get  'projects/:id',                        to: 'projects#view',        as: 'project'
  get  'projects/:id/private_chat',           to: 'projects#private_chat'
  post 'projects/new',                        to: 'projects#new'
  get  'projects/:id/edit',                   to: 'projects#edit'
  get  'projects/:id/view',                   to: 'projects#view_creative_projects'
  post 'projects/:pid/update_can_see',        to: 'projects#update_can_see'
  get  'projects/:id/archive',                to: 'projects#archive'
  get  'projects/:id/unarchive',              to: 'projects#unarchive'
  get  'projects/:id/del_project',            to: 'projects#delete'
  post 'projects/:id/invite',                 to: 'projects#invite'
  post 'projects/:id/:chat/invite',           to: 'projects#invite_to_private'
  post 'projects/:id/invite_designer',                 to: 'projects#invite_designer'
  post 'projects/:id/:chat/invite_designer',           to: 'projects#invite_designer_to_private'
  get  'projects/:id/popup',                  to: 'projects#initial_popup'
  post 'projects/:project_id/update_payment', to: 'projects#update_payment'
  post 'projects/:project_id/remove_payment', to: 'projects#remove_payment'
  post 'projects/:project_id/add_payment',    to: 'projects#add_payment'
  get  'projects/:id/remove_user/:invite_id', to: 'projects#remove_invite'
  get  'projects/:id/remove_designer/:invite_id', to: 'projects#remove_invite_designer'
  get 'projects/:project_id/update_status/:status',   to: 'projects#update_status'

  get  'accept_invitation/:project_id/:id',   to: 'invitations#join'
  get  'accept_invitation/:project_id/:chat/:id',   to: 'invitations#join'
  get  'accept_designer_invitation/:project_id/:id',   to: 'invitations#join_designer'
  get  'accept_designer_invitation/:project_id/:chat/:id',   to: 'invitations#join_designer'

  post 'projects/:project_id/message',        to: 'messages#post_message'
  post 'projects/delete_message',             to: 'messages#remove'
  post 'projects/update_message',             to: 'messages#update'
  get 'projects/:project_id/message/:message_id',     to: 'messages#view'

  get  'attachment/:project_id/:message_id/:attachment_id/:filename', to: 'attachments#view_attachment', constraints: { :filename => /[^\/]+/ }
  get  'attachment/:project_id/:attachment_id/:filename', to: 'attachments#view_attachment', constraints: { :filename => /[^\/]+/ }

  root 'welcome#index'
  get  'fbads',                       to: 'welcome#fbads'
  get  'privacy',                     to: 'welcome#privacy'
  get  'products-pricing',            to: 'welcome#products_pricing'
  get  'terms',                       to: 'welcome#terms'
  get  'whitepapers',                 to: 'welcome#whitepapers'

  get  'contact',                     to: 'application#contact'
  post 'send_contact',                to: 'application#send_contact'
  post 'apply',                       to: 'application#send_apply'
  post 'contact_agency',              to: 'application#contact_agency'
  get  'apply',                       to: 'application#apply'
  get  'agencies',                    to: 'application#agencies'

  get  'process_payment',             to: 'payments#process_pp_payment'
  post 'process_payment',             to: 'payments#process_pp_payment'
  get  'payments/checkout/:project_id/:amount',
       to: 'payments#checkout'
  post 'payments/checkout/:project_id/:amount/process',   to: 'payments#process_payment'




  devise_scope :user do
    get  'user_exists',                 to: 'users#exists'

    authenticate :user do
      get  'profile',                     to: 'users#profile'
      post 'profile/update',              to: 'users#update_profile'
      get  'designers/list',              to: 'users#designer_list'
      get  'designers/:id',               to: 'users#designer_profile'
      post 'designers/:id/update',        to: 'users#update_designer_profile'
      post 'users/:id/update_designer_availability',
                                          to: 'users#update_designer_availability'
      get  'normal_users/list',              to: 'users#normal_user_list'
      get  'normal_users/:id',               to: 'users#normal_user_profile'
      post 'normal_users/:id/update',        to: 'users#update_normal_user_profile'
      get  'normal_users/:id/convert',
                                          to: 'users#convert_normal_user_to_designer'
    end

    post 'users/sign_up',               to: 'users#sign_up'
    post 'users/log_in',                to: 'users#log_in'
    post 'users/reset',                 to: 'users#reset'

    get  'popups/login',                to: 'users#login_popup'
    get  'popups/sign_up',              to: 'users#sign_up_popup'
    get  'popups/password',             to: 'users#password_popup'
    get  'popups/password_reset_sent',  to: 'users#password_reset_sent_popup'
  end
  # The priority is based upon order of creation: first created -> highest priority.
  # See how all your routes lay out with "rake routes".

  # You can have the root of your site routed with "root"
  # root 'welcome#index'

  # Example of regular route:
  #   get 'products/:id' => 'catalog#view'

  # Example of named route that can be invoked with purchase_url(id: product.id)
  #   get 'products/:id/purchase' => 'catalog#purchase', as: :purchase

  # Example resource route (maps HTTP verbs to controller actions automatically):
  #   resources :products

  # Example resource route with options:
  #   resources :products do

  #     member do
  #       get 'short'
  #       post 'toggle'
  #     end
  #
  #     collection do
  #       get 'sold'r
  #     end
  #   end

  # Example resource route with sub-resources:
  #   resources :products do
  #     resources :comments, :sales
  #     resource :seller
  #   end

  # Example resource route with more complex sub-resources:
  #   resources :products do
  #     resources :comments
  #     resources :sales do
  #       get 'recent', on: :collection
  #     end
  #   end

  # Example resource route with concerns:
  #   concern :toggleable do
  #     post 'toggle'
  #   end
  #   resources :posts, concerns: :toggleable
  #   resources :photos, concerns: :toggleable

  # Example resource route within a namespace:
  #   namespace :admin do
  #     # Directs /admin/products/* to Admin::ProductsController
  #     # (app/controllers/admin/products_controller.rb)
  #     resources :products
  #   end
end
