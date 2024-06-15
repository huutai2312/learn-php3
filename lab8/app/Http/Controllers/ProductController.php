<?php

    namespace App\Http\Controllers;

    use App\Models\Product;
    use App\Http\Resources\ProductResource;
    use Illuminate\Http\Request;
    use Validator;

    class ProductController extends Controller
    {
        public function index()
        {
            return ProductResource::collection(Product::all());
        }

        public function store(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'price' => 'required|numeric',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $product = Product::create($request->all());

            return new ProductResource($product);
        }

        public function show($id)
        {
            $product = Product::findOrFail($id);

            return new ProductResource($product);
        }

        public function update(Request $request, $id)
        {
            $validator = Validator::make($request->all(), [
                'name' => 'sometimes|required|string|max:255',
                'description' => 'sometimes|required|string',
                'price' => 'sometimes|required|numeric',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $product = Product::findOrFail($id);
            $product->update($request->all());

            return new ProductResource($product);
        }

        public function destroy($id)
        {
            $product = Product::findOrFail($id);
            $product->delete();

            return response()->json(null, 204);
        }
    }
