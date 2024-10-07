
>YARN 

npm install --global yarn

// MAKE PACKAGES
yarn init 

question name (react-laravel-ecommerce): Bakes
question version (1.0.0):
question description: IB Bakes Ecommerce
question entry point (index.js):
question repository url: https://github.com/Sonawap/online-shopping.git
question author:
question license (MIT):
question private:

// ABLE TO WRITE MULTIPLE COMMANDS 
yarn add concurrently 

yarn start


>LARAVEL 

php artisan make:model Category -mfs

// MAKE TABLE MIGRATION database/migration
 public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->text('product_description');
            $table->string('avatar')->nullable();
            $table->timestamps();
        });
}


// INPUT DATABASE 
DB_DATABASE=db_ecommerce

php artisan migrate 


// CREATE DATA database/factories
public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
        ];
    }


// GENERATE DATA database/seeders
 public function run()
    {
        Category::factory()
            ->count(5)
            ->create();
    }

// SEED DATABASE database/seeders/DatabaseSeeder.php 

 public function run()
    {
      $this->call(CategorySeeder::class);
    }

php artisan db:seed

// CREATE CONTROLLER AND A FOLDER 
php artisan make:controller API/CategoryController --api

// FOR POST METHOD
php artisan make:request CategoryRequest

// LINKING LARAVEL PROJECT TO STORAGE FOLDER
php artisan storage link


>POSTMAN 

> Folder Category 
> Add new request Get all categories 

