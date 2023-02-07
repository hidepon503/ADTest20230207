   
   <!--//contactphpのメモ
   //モデルでの検索を行う為の記述
   /*
    public static function doSearch($fullname, $gender, $from, $until, $email)
    {
        $query = self::query();
        if(!empty($fullname)){
            $query->where('fullname','like binary', "%{$fullname}%");
        }
        
        if(!empty($gender)){
        $query->where('gender','like binary', "%{$gender}%");
        }

        $date = Contact::whereBetween("created_at",[$from,$until]);         
        
        if(!empty($email)){
            $query->where('email','like binary', "%{$email}%");
        }
        
        $results = $query->get();
        

        return $results;
    }-->

      <!--search.blade.phpのメモ。ページネーションを実装するための記述
  <div class="pagination">
    <div class="pagination2">
      {{ $results->total() }}件中
      {{ $results->firstItem() }}〜{{ $results->lastItem() }} 件
    </div>
    <div class="pagination3">
      {{$results->appends(request()->query())->links('vendor.pagination.custom')}}
    </div>
  </div>
  -->
