@error($field)
<div class="text-danger my-3">{{ $message }}</div>
@enderror
<div class="input-group mb-3">
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="{{ $field }}" aria-describedby="inputGroupFileAddon01"
            name="{{ $field }}">
        <label class="custom-file-label" for="{{ $field }}">{{ $label ?? 'Choose File...' }}</label>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script>
<script>
    $(document).ready(function() {
        bsCustomFileInput.init()
    })
</script>
