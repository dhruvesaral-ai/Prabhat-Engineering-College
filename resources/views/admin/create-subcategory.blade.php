{{-- <!doctype html>
<html lang="en">
    @include('layout.head')
    <div class="container-xxl position-relative bg-white d-flex p-0">
    <div class="sidebar pe-4 pb-3">
        @include('layout.sidebar')
    </div>

    <div class="content">
        @include('layout.header')
                <!-- Form Start -->



                @if (session('Success'))
                <div class="alert alert-success">
                    {{session('Success')}}
                </div>
                @endif

                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-12 col-xl-8 mx-auto">
                            <div class="bg-light rounded h-100 p-4">
                                <h6 class="mb-4">Sub Category Form</h6>
                                <form action="{{ route('sub.category.store') }}" method="post">
                                    @csrf
                                
                                    <div class="mb-3">
                                        <label for="categorySelect" class="form-label">Select Category</label>
                                        <select name="category_id" id="categorySelect" class="form-control" required>
                                            <option value="">-- Select Category --</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                
                                    <div class="mb-3">
                                        <label for="subCategoryText" class="form-label">Sub Category</label>
                                        <input type="text" name="sub_category" class="form-control" id="subCategoryText" required>
                                    </div>
                                
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form End -->
    </div>
    
@include('layout.footer')
</body>
</html>














     --}}