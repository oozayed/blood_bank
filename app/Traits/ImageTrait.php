<?php
namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait ImageTrait
{


    public function storeImage($image , $old_image = null)
    {
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('uploads', $imageName, 'public');
        if (Storage::disk('public')->exists('uploads/' . $old_image)) {
            Storage::disk('public')->delete('uploads/' . $old_image);
        }
        return $imageName;
    }

}
