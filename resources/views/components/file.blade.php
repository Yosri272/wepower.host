<div>
    @if (isset($label))
<<<<<<< HEAD
        <label for="{{ $name }}" class="form-label">{{ __($label) }}</label>
    @endif
    <input type="file" name="{{ $name }}" id="{{ $name }}" class="form-control @error($name) is-invalid
    @enderror" @if($preview) onchange="previewFile(event,'{{ $preview }}')" @endif/>
=======
        <label for="{{ $name }}" class="form-label">
            {{ __($label) }}
            @if($required) <span class="text-danger">*</span> @endif
        </label>
    @endif
    <input type="file" name="{{ $name }}" id="{{ $name }}" class="form-control @error($name) is-invalid
    @enderror" @if($preview) onchange="previewFile(event,'{{ $preview }}')" @endif @if ($required) required @endif/>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    @error($name)
        <p class="text text-danger m-0">{{ $message }}</p>
    @enderror
</div>
