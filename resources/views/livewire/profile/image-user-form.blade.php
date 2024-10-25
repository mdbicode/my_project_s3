<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;

new class extends Component
{
    use WithFileUploads;

    // public $image;
    public $uploadedImage;

    public function mount(): void
    {
        $this->uploadedImage = Auth::user()->image;
    }

}
?>

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Image Profile') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Upload your image") }}
        </p>
    </header>
    <img src="{{ $uploadedImage }}" alt="Profile Image" width="250px" height="250px">

    <form action="{{ route('upload.file') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <x-primary-button type="submit">Upload</x-primary-button>
    </form>
</section>