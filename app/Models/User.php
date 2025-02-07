<?php
    
    namespace App\Models;
    
    // use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    
    class User extends Authenticatable
    {
        /** @use HasFactory<UserFactory> */
        use HasFactory, Notifiable;
        
        protected $fillable = [
          'name',
          'email',
          'password',
          'avatar'
        ];
        
        protected $hidden = [
          'password',
          'remember_token',
        ];
        
        public function isAdmin(): bool
        {
            return $this->id = 1;
        }
        
        protected function casts(): array
        {
            return [
              'email_verified_at' => 'datetime',
              'password' => 'hashed',
            ];
        }
    }
