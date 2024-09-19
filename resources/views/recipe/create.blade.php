<x-layout>
    <form action="{{ route('recipe.store') }}" method="post">
        @csrf
        <div>
            <input class="form-input" type="text" name="name" value="{{old('name')}}">
            @error('name') 
                {{ $message }}
            @enderror
            <textarea name="description">
                {{old('description')}}
            </textarea>
            @error('description') 
                {{ $message }}
            @enderror
            <input type="number" name="duration"  value="{{old('duration')}}">
            @error('duration') 
                {{ $message }}
            @enderror
        </div>
        <input type="submit">
    </form>
</x-layout>