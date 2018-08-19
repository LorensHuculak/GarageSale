    {{--@if($users->count() > 0)
        <div class="checkbox">
            @foreach($users as $user)
                <label title="{{ $user->name }}">
                    <input type="checkbox" name="recipients[]" value="{{ $user->id }}">{{ $user->name }}
                </label>
            @endforeach
        </div>
    @endif --}}

<footer class="g-bg-gray-light-v8 g-px-15 g-px-30--lg g-py-10 g-py-25--lg">
        <form action="{{ route('messages.update', $thread->id) }}" method="post">
                {{ method_field('put') }}
                {{ csrf_field() }}
            <div class="media align-items-top">
               

                <div class="media-body g-ml-25">
                    <textarea name="message" class="form-control u-textarea-expandable g-resize-none g-bg-transparent g-brd-none w-100 p-0 g-mt-minus-3" placeholder="Type Something">{{ old('message') }}</textarea>
                </div>

                <div class="d-flex ml-auto">
                    <button type="submit" class="btn btn-link d-flex align-self-top align-items-top u-link-v5 g-color-secondary g-color-secondary--hover p-0 g-ml-15">
                        <i class="hs-admin-arrow-top-right g-font-size-18 g-line-height-1_4"></i>
                        <span class="g-hidden-sm-down g-font-weight-300 g-font-size-12 g-font-size-default--md g-ml-4 g-ml-8--md">Send</span>
                    </button>
                </div>
            </div>
        </form>
    </footer>