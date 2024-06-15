```PHP
php artisan make:migration create_categories_table
```

```PHP
php artisan make:migration create_products_table
```
```PHP
php artisan make:migration create_users_table
```

```PHP
php artisan make:migration create_orders_table
```

```PHP
php artisan make:migration create_order_details_table
```

```PHP
php artisan serve
```

```PHP
php artisan migrate
```

database/migrations <br>
File create_categories_table
```SQL
public function up()
{
Schema::create('categories', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->timestamps();
});
}
```

File create_products_table
```SQL
public function up()
{
Schema::create('products', function (Blueprint $table) {
$table->id();
$table->string('title');
$table->string('image');
$table->decimal('price', 8, 2);
$table->decimal('sale', 8, 2)->nullable();
$table->text('description');
$table->text('detail');
$table->boolean('status');
$table->foreignId('category_id')->constrained()->onDelete('cascade');
$table->timestamps();
});
}
```

File create_users_table
```SQL
public function up()
{
Schema::create('users', function (Blueprint $table) {
$table->id();
$table->string('username')->unique();
$table->string('email')->unique();
$table->string('password');
$table->string('role');
$table->timestamps();
});
}
```

File create_orders_table
```SQL
public function up()
{
Schema::create('orders', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->string('phone');
$table->string('address');
$table->string('payment_method');
$table->date('buy_date');
$table->boolean('status');
$table->foreignId('user_id')->constrained()->onDelete('cascade');
$table->timestamps();
});
}
```

File create_order_details_table
```SQL
public function up()
{
Schema::create('order_details', function (Blueprint $table) {
$table->id();
$table->foreignId('product_id')->constrained()->onDelete('cascade');
$table->foreignId('order_id')->constrained()->onDelete('cascade');
$table->decimal('price', 8, 2);
$table->integer('quantity');
$table->timestamps();
});
}
```

```PHP
php artisan make:model Category
```

```PHP
php artisan make:model Product
```

```PHP
php artisan make:model User
```

```PHP
php artisan make:model Order
```

```PHP
php artisan make:model OrderDetail
```

```PHP
php artisan make:factory CategoryFactory
```

```PHP
php artisan make:factory ProductFactory
```

```PHP
php artisan make:factory UserFactory
```

```PHP
php artisan make:factory OrderFactory
```

```PHP
php artisan make:factory OrderDetailFactory
```

```PHP
php artisan make:seeder CategorySeeder
```

```PHP
php artisan make:seeder ProductSeeder
```

```PHP
php artisan make:seeder UserSeeder
```

```PHP
php artisan make:seeder OrderSeeder
```

```PHP
php artisan make:seeder OrderDetailSeeder
```

```PHP
php artisan db:seed
```
