<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Génère un nom aléatoire
            'name' => fake()->name(),
            // Génère un email unique et sécurisé
            'email' => fake()->unique()->safeEmail(),
            // Date de vérification de l'email (maintenant)
            'email_verified_at' => now(),
            // Mot de passe hashé (par défaut : 'password')
            'password' => static::$password ??= Hash::make('password'),
            // Token de session pour "remember me"
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        // Modifie l'état pour que 'email_verified_at' soit null
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
