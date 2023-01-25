<label class="label">
    {{ $label }} </label>
<div class="flex w-full">
    <select name="{{ $name }}" id="{{ $name }}" disabled class="p-3 w-full">
        @if (count($options) > 0)
            <option value="{{ $options[0] }}">{{ $options[1] }} @if (isset($options[2]))
                    {{ ' | ' . $options[2] }}
                @endif
            </option>
        @endif
    </select>
    <input type="hidden" name="{{ $name }}" id="{{ $name }}_val" value="{{ $options[0] ?? '' }}" />
    <span class="p-3 bg-sky-500" id="b{{ $name }}"
        onclick="openModal('{{ $route }}', '{{ $method }}');">
        <i class='mdi mdi-arrow-all'></i>

    </span>
</div>


