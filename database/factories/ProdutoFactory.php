<?php
  
namespace Database\Factories;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
  
class ProdutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produto::class;
  
    /**
     * Define the model's default state.
     *
     * @return array
     */
    
     public function definition()
{
    return [
        'nome' => $this->faker->name,
        'Descrição' => $this->faker->text,
        'Data de aquisição' => $this->faker->unixTime(),  
        'Valor' => $this->faker->randomFloat(2, 0, 1000), 
        'Localização' => $this->faker->address,
        'imagem' => $this->faker->imageUrl(),  
        'id_user' => \App\Models\User::inRandomOrder()->first()->id,
        'id_categorias' => \App\Models\Categoria::inRandomOrder()->first()->id,
     
    ];
}
     }
    
     
    

    
