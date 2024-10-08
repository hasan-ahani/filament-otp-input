@php
    $extraAlpineAttributes = $getExtraAlpineAttributes();
    $id = $getId();
    $isConcealed = $isConcealed();
    $isDisabled = $isDisabled();
    $isPrefixInline = $isPrefixInline();
    $isSuffixInline = $isSuffixInline();
    $prefixActions = $getPrefixActions();
    $prefixIcon = $getPrefixIcon();
    $prefixLabel = $getPrefixLabel();
    $suffixActions = $getSuffixActions();
    $suffixIcon = $getSuffixIcon();
    $suffixLabel = $getSuffixLabel();
    $statePath = $getStatePath();
    $numberInput = $getNumberInput();
    $isAutofocused = $isAutofocused();
    $inputType = $getType();
    $autocomplete = $getAutocomplete();
    $isRtl = $getInputsContainerDirection();
@endphp

<x-dynamic-component
    :component="$getFieldWrapperView()"
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-actions="$getHintActions()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()"
>
    <div x-data="{
    	    state: $wire.$entangle('{{ $getStatePath() }}'),
    	    length: {{$numberInput}},
    	    autoFocus: '{{$isAutofocused}}',
    	    type: '{{$inputType}}',
            init: function(){
                if (this.autoFocus){
                    this.$refs[1].focus();
                }
            },
            handleInput(e, i) {
                const input = e.target;
                if(input.value.length > 1){
                    input.value = input.value.substring(0, 1);
                }

                this.state = Array.from(Array(this.length), (element, i) => {
                    const el = this.$refs[(i + 1)];
                    return el.value ? el.value : '';
                }).join('');


                if (i < this.length) {
                    this.$refs[i+1].focus();
                    this.$refs[i+1].select();
                }
                if(i == this.length){
                    @this.set('{{ $getStatePath() }}', this.state)
                }
            },

            handlePaste(e) {
                const paste = e.clipboardData.getData('text');
                this.value = paste;
                const inputs = Array.from(Array(this.length));

                inputs.forEach((element, i) => {
                    this.$refs[(i+1)].focus();
                    this.$refs[(i+1)].value = paste[i] || '';
                });
            },

            handleBackspace(e) {
                const ref = e.target.getAttribute('x-ref');
                e.target.value = '';
                const previous = ref - 1;
                this.$refs[previous] && this.$refs[previous].focus();
                this.$refs[previous] && this.$refs[previous].select();
                e.preventDefault();
            },
        }">
        <div class="flex justify-between gap-6 fi-otp-input-container" dir="{{ $isRtl ? 'rtl' : 'ltr' }}">

            @foreach(range(1, $numberInput) as $column)

                <x-filament::input.wrapper
                    :disabled="$isDisabled"
                    :inline-prefix="$isPrefixInline"
                    :inline-suffix="$isSuffixInline"
                    :prefix="$prefixLabel"
                    :prefix-actions="$prefixActions"
                    :prefix-icon="$prefixIcon"
                    :prefix-icon-color="$getPrefixIconColor()"
                    :suffix="$suffixLabel"
                    :suffix-actions="$suffixActions"
                    :suffix-icon="$suffixIcon"
                    :suffix-icon-color="$getSuffixIconColor()"
                    :valid="! $errors->has($statePath)"
                    :attributes="
                        \Filament\Support\prepare_inherited_attributes($getExtraAttributeBag())
                        ->class(['fi-fo-text-input overflow-hidden'])
                    "
                >
                    <input
                        {{$isDisabled ? 'disabled' : ''}}
                        type="{{$inputType}}"
                        maxlength="1"
                        x-ref="{{$column}}"
                        required
                        autocomplete="{{$autocomplete}}"
                        class="fi-input fi-otp-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3 text-center"
                        x-on:input="handleInput($event, {{$column}})"
                        x-on:paste="handlePaste($event)"
                        x-on:keydown.backspace="handleBackspace($event)"
                    />

                </x-filament::input.wrapper>
            @endforeach

        </div>
    </div>
</x-dynamic-component>

<style>
    input.fi-otp-input[type=number] {
        -webkit-appearance: textfield;
        -moz-appearance: textfield;
        appearance: textfield;
        overflow: visible;
    }

    input.fi-otp-input[type=number]::-webkit-inner-spin-button,
    input.fi-otp-input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0
    }
</style>
