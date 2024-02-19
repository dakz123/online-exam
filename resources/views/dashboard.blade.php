<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        
        <a href="{{ route('exam.index') }}" class="btn btn-xs btn-info pull-right">Start Quiz</a>
    
    </div>
</x-app-layout>
