<div class="px-20 pb-10 mb-10 border-b border-gray-200">
    <div class="flex mt-16 font-medium leading-6">
        @if ($showPreviousLink)
            <a class="flex mr-8 transition-colors duration-200 hover:text-gray-900"
                href="{{ route('slide', $currentSlide - 1) }}">
                <span aria-hidden="true" class="mr-2">←</span>Previous
            </a>
        @endif
        @if ($showNextLink)
        <a class="flex ml-auto text-right transition-colors duration-200 hover:text-gray-900"
            href="{{ route('slide', $currentSlide + 1) }}">
            Next <span aria-hidden="true" class="ml-2">→</span>
        </a>
        @endif
    </div>
</div>
