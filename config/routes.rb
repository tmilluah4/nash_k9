NashK9::Application.routes.draw do
  # The priority is based upon order of creation:
  # first created -> highest priority.

  # Sample of regular route:
     get "static_pages/home"

     get "overview/index"
     get "overview/meet_the_team"
     get "overview/facility"
     get "overview/partners"
     get "overview/press"
     get "overview/testimonials"
     get "overview/company_facts"

     get "dog_training_tn_services/index"
     get "dog_training_tn_services/executive_protection_dogs"
     get "dog_training_tn_services/hunting_dogs"
     get "dog_training_tn_services/nashville_dog_training_programs"
     get "dog_training_tn_services/pet_first_aid"
     get "dog_training_tn_services/police_dogs"
     get "dog_training_tn_services/search_and_rescue"
     get "dog_training_tn_services/detection_dogs"
  # Keep in mind you can assign values other than :controller and :action

  # Sample of named route:
  #   match 'products/:id/purchase' => 'catalog#purchase', :as => :purchase
  # This route can be invoked with purchase_url(:id => product.id)

  # Sample resource route (maps HTTP verbs to controller actions automatically):
  #   resources :products

  # Sample resource route with options:
  #   resources :products do
  #     member do
  #       get 'short'
  #       post 'toggle'
  #     end
  #
  #     collection do
  #       get 'sold'
  #     end
  #   end

  # Sample resource route with sub-resources:
  #   resources :products do
  #     resources :comments, :sales
  #     resource :seller
  #   end

  # Sample resource route with more complex sub-resources
  #   resources :products do
  #     resources :comments
  #     resources :sales do
  #       get 'recent', :on => :collection
  #     end
  #   end

  # Sample resource route within a namespace:
  #   namespace :admin do
  #     # Directs /admin/products/* to Admin::ProductsController
  #     # (app/controllers/admin/products_controller.rb)
  #     resources :products
  #   end

  # You can have the root of your site routed with "root"
  # just remember to delete public/index.html.

  # See how all your routes lay out with "rake routes"

  # This is a legacy wild controller route that's not recommended for RESTful applications.
  # Note: This route will make all actions in every controller accessible via GET requests.
  # match ':controller(/:action(/:id))(.:format)'
end
