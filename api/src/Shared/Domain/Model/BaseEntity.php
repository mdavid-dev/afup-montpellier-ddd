<?php declare(strict_types=1);

namespace App\Shared\Domain\Model;

use App\Shared\Domain\ValueObject\ApiId;
use App\Shared\Domain\ValueObject\ApiUuid;
use Doctrine\ORM\Mapping as ORM;

#[ORM\MappedSuperclass]
class BaseEntity
{
    #[ORM\Embedded(columnPrefix: false)]
    private ApiId $id;

    #[ORM\Embedded(columnPrefix: false)]
    private readonly ApiUuid $uuid;

    public function __construct()
    {
        $this->id = new ApiId();
        $this->uuid = new ApiUuid();
    }

    public function id(): ApiId
    {
        return $this->id;
    }

    public function uuid(): ApiUuid
    {
        return $this->uuid;
    }
}
