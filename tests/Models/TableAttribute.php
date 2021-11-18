<?php declare(strict_types=1);

namespace Floquent\Tests\Models;

use Floquent\Attributes\Table;
use Floquent\Traits\FloquentModel;
use Illuminate\Database\Eloquent\Model;

#[Table('example')]
class TableAttribute extends Model
{
    use FloquentModel;
}