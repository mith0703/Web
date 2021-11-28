<?php 
    class News extends Controller
    {
        function default() {
           $this->view("news");
            
        //     $pageno=0;
        //     $queries = array();
        //     (parse_str($_SERVER['REQUEST_URI'], $queries));
        //     // print_r( $queries);

        //     if (isset($queries['/ltw/home?pageno'])) {
        //         $pageno = $queries['/ltw/home?pageno'];
        //         // print_r('Pageno = ' . $pageno);
        //     } else if (isset($queries['/ltw/?pageno'])) {
        //         $pageno = $queries['/ltw/?pageno']; 
        //     } else {
        //         $pageno = 1;
        //     }

        //     $limit = 6;
        //     $keyword ="";
        //     $items = [];

        //     $home = $this->model('homemodel');
        //     $result = $home->get_all_items($keyword, $pageno, $limit);

        //     if (isset($queries['search'])){
        //         $keyword = $queries['search'];
        //         $result = $home->get_all_items($keyword, $pageno, $limit);
        //         $this->view("homeview", ['items' => $result[0], 'total_pages' => $result[1], 'total_items' => $result[2] ,'pageno' => $pageno, 'limit' => $limit, 'keyword' => $keyword]);
        //     } else {
        //         $this->view("homeview", ['items' => $result[0], 'total_pages' => $result[1], 'total_items' => $result[2] ,'pageno' => $pageno, 'limit' => $limit, 'keyword' => $keyword]);
        //     }


        // }
        }
}
?>
