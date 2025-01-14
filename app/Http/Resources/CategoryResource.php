<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    { // woocommerce.com/posts/a-guide-to-woocommerce-user-roles-permissions-and-security
        return [
            'id' => $this->id,
            'icon' => $this->icon,
            'order' => $this->order,
            'parent_id' => $this->parent_id,
            'name' => $this->getTranslations('name'),
            'child_categories' => self::collection($this->childCategories)
        ];
    }
}
