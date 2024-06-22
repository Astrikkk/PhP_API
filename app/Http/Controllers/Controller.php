<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

abstract class Controller
{
//    public function getList() {
//        try {
//            $data = Category::all();
//            return response()->json($data)
//                ->header('Content-Type', 'application/json; charset=utf-8');
//        } catch (\Exception $e) {
//            Log::error('Error fetching category list: ' . $e->getMessage());
//            return response()->json(['message' => 'Internal Server Error'], Response::HTTP_INTERNAL_SERVER_ERROR)
//                ->header('Content-Type', 'application/json; charset=utf-8');
//        }
//    }
//
//    // Method to create a new category
//    public function create(Request $request) {
//        try {
//            $validatedData = $request->validate([
//                'name' => 'required|string|max:255',
//                'image' => 'nullable|string|max:255', // Ensure the image field is also validated
//            ]);
//
//            $category = Category::create($validatedData);
//
//            return response()->json($category, Response::HTTP_CREATED)
//                ->header('Content-Type', 'application/json; charset=utf-8');
//        } catch (\Exception $e) {
//            Log::error('Error creating category: ' . $e->getMessage());
//            return response()->json(['message' => 'Internal Server Error'], Response::HTTP_INTERNAL_SERVER_ERROR)
//                ->header('Content-Type', 'application/json; charset=utf-8');
//        }
//    }
//
//    // Method to delete an existing category by ID
//    public function delete($id) {
//        try {
//            $category = Category::find($id);
//
//            if ($category) {
//                $category->delete();
//                return response()->json(null, Response::HTTP_NO_CONTENT)
//                    ->header('Content-Type', 'application/json; charset=utf-8');
//            } else {
//                return response()->json(['message' => 'Category not found'], Response::HTTP_NOT_FOUND)
//                    ->header('Content-Type', 'application/json; charset=utf-8');
//            }
//        } catch (\Exception $e) {
//            Log::error('Error deleting category: ' . $e->getMessage());
//            return response()->json(['message' => 'Internal Server Error'], Response::HTTP_INTERNAL_SERVER_ERROR)
//                ->header('Content-Type', 'application/json; charset=utf-8');
//        }
//    }
}

