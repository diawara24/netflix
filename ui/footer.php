    </section>
    <script type="text/javascript">
        function deleteSerie(id)
        {
            if(confirm('Etes vous sûr de vouloir supprimer la série ?'))
            {
                window.location.href='/netflix/series.php?id='+id;
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>