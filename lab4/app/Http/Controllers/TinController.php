<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
    function index()
    {
        return view('index');
    }
    function lienhe()
    {
        return view('lienhe');
    }

    function lay1tin($id)
    {
        // Retrieve detailed information about the news article with the given $id
        $tinChiTiet = DB::table('tin')
            ->select('id', 'tieuDe', 'tomTat', 'ngayDang', 'noiDung') // Assuming 'noiDung' is the content of the article
            ->where('id', $id) // Filter by the provided $id
            ->first(); // Retrieve the first matching record

        // Check if the article exists
        if (!$tinChiTiet) {
            // Handle case when the article with the given id does not exist
            // For example, you can redirect to an error page or return a message
            return redirect()->route('error');
        }

        // Pass the detailed information of the article to the view
        return view('chitiet', compact('tinChiTiet'));
    }

    function layTinTheoIdLT($idLT)
    {
        // Retrieve detailed information about the news articles with the given $idLT
        $tinTheoIdLT = DB::table('tin')
            ->select('tin.id', 'tin.tieuDe', 'tin.tomTat', 'tin.ngayDang', 'tin.noiDung', 'loaitin.ten') // Selecting category name from 'loaitin' table
            ->join('loaitin', 'tin.idLT', '=', 'loaitin.id') // Joining 'tin' table with 'loaitin' table
            ->where('tin.idLT', $idLT) // Filter by the provided $idLT
            ->orderBy('tin.ngayDang', 'desc') // Order by date descending
            ->get(); // Retrieve all matching records

        // Return the view with news articles and category name
        return view('tintrongloai', compact('tinTheoIdLT'));
    }
}
