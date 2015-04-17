class CreateUsers < ActiveRecord::Migration
  def change
    create_table :users do |t|
      t.string :name
      t.string :email
      t.string :comments
      t.string :subject
      t.timestamps
    end
  end
end
