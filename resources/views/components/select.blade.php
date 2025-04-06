<div>
    @if (isset($label) && $label)
<<<<<<< HEAD
        <label for="{{ $name }}" class="form-label">{{ __($label) }}</label>
    @endif
    <select @if ($placeholder) data-placeholder="{{ $placeholder }}" @endif name="{{ $name }}" id="{{ $name }}" class="form-control select2 @error($name) is-invalid @enderror" @if ($multiselect) multiple @endif style="width: 100%;">
=======
        <label for="{{ $name }}" class="form-label">
            {{ __($label) }}
            @if($required) <span class="text-danger">*</span> @endif
        </label>
    @endif
    <select @if ($placeholder) data-placeholder="{{ $placeholder }}" @endif name="{{ $name }}" id="{{ $id ?? $name }}" class="form-control select2 @error($name) is-invalid @enderror" @if ($multiselect) multiple @endif style="width: 100%;">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        {{ $slot }}
    </select>
    @error($name)
        <p class="text text-danger m-0">{{ $message }}</p>
    @enderror
</div>
