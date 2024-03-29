package com.example.projectuts_ubayalibrary_160420034.view

import android.os.Bundle
import androidx.fragment.app.Fragment
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ProgressBar
import android.widget.TextView
import androidx.lifecycle.Observer
import androidx.lifecycle.ViewModelProvider
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import androidx.swiperefreshlayout.widget.SwipeRefreshLayout
import com.example.projectuts_ubayalibrary_160420034.R
import com.example.projectuts_ubayalibrary_160420034.viewmodel.ListViewModel
import com.example.projectuts_ubayalibrary_160420034.viewmodel.RecomendedListViewModel

class RecommendedBookFragment : Fragment() {
    private lateinit var viewModel: RecomendedListViewModel
    private var libraryListAdapter =RecomendedListAdapter(arrayListOf())

    override fun onCreateView(
        inflater: LayoutInflater, container: ViewGroup?,
        savedInstanceState: Bundle?
    ): View? {
        // Inflate the layout for this fragment
        return inflater.inflate(R.layout.fragment_recommended_book, container, false)
    }

    override fun onViewCreated(view: View, savedInstanceState: Bundle?) {
        super.onViewCreated(view, savedInstanceState)

        viewModel = ViewModelProvider(this).get(RecomendedListViewModel::class.java)
        viewModel.refresh()

        val recView =view.findViewById<RecyclerView>(R.id.recyclerView2)
        recView.layoutManager = LinearLayoutManager(context)
        recView.adapter = libraryListAdapter

        observeViewModel()

        val swipe = view.findViewById<SwipeRefreshLayout>(R.id.refreshLayout)
        swipe.setOnRefreshListener {
            recView.visibility = View.GONE
            val txtError = view?.findViewById<TextView>(R.id.txtErrorRecommend)
            txtError?.visibility = View.GONE
            val progressLoad = view?.findViewById<TextView>(R.id.progressBarRecommend)
            progressLoad?.visibility = View.GONE

            viewModel.refresh()
            swipe.isRefreshing = false
        }
    }

    fun observeViewModel(){
        viewModel.libraryLD.observe(viewLifecycleOwner, Observer{
            libraryListAdapter.updateLibraryList(it)
        })

        viewModel.libraryLoadErrorLD.observe(viewLifecycleOwner, Observer{
            val txtError = view?.findViewById<TextView>(R.id.txtErrorRecommend)
            if(it == true){
                txtError?.visibility = View.VISIBLE
            }else{
                txtError?.visibility = View.GONE
            }
        })

        viewModel.loadingLD.observe(viewLifecycleOwner, Observer {
            val progressLoad = view?.findViewById<ProgressBar>(R.id.progressBarRecommend)
            val recView = view?.findViewById<RecyclerView>(R.id.recyclerView2)
            if(it == true){
                recView?.visibility = View.GONE
                progressLoad?.visibility = View.VISIBLE
            }else{
                recView?.visibility = View.VISIBLE
                progressLoad?.visibility = View.GONE
            }
        })
    }
}