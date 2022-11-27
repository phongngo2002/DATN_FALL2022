{{-- public function updateCategory(Request $request)
    {
        $data = $request->only([
            'name',
            'status',
            'expiration_date'
        ]);

        if ($request->file !== "undefined") {
            $data['image'] = $request->file->hashName();
            Storage::disk('public')->put('images', $request->file);
        }

        if ($request->file == "undefined") {
            $category = $this->categoryService->getCategory($request->id);
            $data['image'] = $category->image;
        }

        $this->categoryService->update($request->id, $data);

        if ($request->sub_cate_add) {
            foreach (json_decode($request->sub_cate_add, true) as $nameSubCateNew) {
                if ($nameSubCateNew) {
                    $this->categoryService->create([
                        "name" => $nameSubCateNew,
                        "status" => $request->status,
                        "parent_id" => $request->id
                    ]);
                }
            }
        }

        foreach (json_decode($request->sub_cate, true) as $subCate) {
            $this->categoryService->update($subCate["id"], [
                "name" => $subCate["name"]
            ]);
        }

        return response()->json($data);
    } --}}