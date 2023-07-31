$(document).ready(function () {
    $.validator.addMethod('school',function(value, element, param) {
        return value!= '0';
      }, "Please Select school");

      $.validator.addMethod('whitespace', function(value, element) {
        return this.optional(element) || /^\S/.test(value);
      }, "Please enter valid name");

      $.validator.addMethod('addwhitespace', function(value, element) {
        return this.optional(element) || /^\S/.test(value);
      }, "Please enter valid address");  

      $.validator.addMethod('onlylettersAndSpace', function(value, element) {
        var regex = /^[a-zA-Z ]+$/;
        return regex.test(value);
      }, "Please enter valid name");
    
    $('#student').validate({ 
        rules :{
            fname:{
              required:true,
              whitespace:true,   
              onlylettersAndSpace: true, 
            },
            lname:{
              required:true,
              whitespace:true,   
              onlylettersAndSpace: true, 
            },
            email:{
                required:true,
                email: true,
            },
            gender:{
                required:true,
            },
            age: {
                required: true,
                maxlength: 2,
              },
            dob:{
                required:true,
            },
            monumber:{
                required: true,
                digits: true,
                maxlength: 10,
                minlength: 10,    
                   
            },
            add:{
                required:true,
                addwhitespace:true  
            },
            school:{
                school:true
            }
        },
        messages:{
            fname:{
                required:"First name is required",
            },
            lname:{
                required:"Last name is required",
            },
            email:{
                required:"Email is required",
            },
            gender:{
                required:"Please select gender",
            },
            age: {
                required: "Please enter your age.",
                maxlength: "Please enter valid age.",
            },
            dob:{
                required:"Please select Date",
            },  
            monumber:{
                required: "Please enter your phone number.",
                maxlength:"Please enter valid phone number",
                minlength: "Your phone number must be at least 10 digits long.",
            },
            add:{
                required:"Address is required",
            },
        }
    });
    $('#school').validate({ 
        rules :{
            name:{
              required:true,
              whitespace:true,   
              onlylettersAndSpace: true, 
              
            },
            email:{
                required:true,
                email: true,
            },
            pass:{
                required:true,   
                minlength:8,
            },
            monumber:{
              required: true,
              digits: true,
              maxlength: 10,
              minlength: 10,       
            },
            add:{
                required:true,
                addwhitespace:true  
            },
            pname:{
                required:true,
                whitespace:true,   
                onlylettersAndSpace: true, 
            },
           
        },
        messages:{
            name:{
                required:"First name is required",
            },
            email:{
                required:"Email is required",
            },  
            pass:{
                required:"Password is mandatory",   
                minlength:"Please enter atleast 8 character",
            },
            monumber:{
              required: "Please enter your phone number.",
              maxlength:"Please enter valid phone number",
              minlength: "Your phone number must be at least 10 digits long.",
            },
            add:{
                required:"Address is required",
            },
            pname:{
                required:"Principal name is required",
            },
        }
    });
    $('#login').validate({ 
        rules :{
            loginemail:{
                required:true,
                email: true,
            },
            loginpass:{
                required:true,   
                minlength:8,
            },
        },
        messages:{
            loginemail:{
                required:"Email is required",
            },  
            loginpass:{
                required:"Password is required",   
                minlength:"Please enter atleast 8 character",
            },
        }
    });

    // Pagination & Searching
    $(document).ready(function() {
        var currentPage = 1;
        var recordsPerPage = 5; // Adjust this value as needed
      
        function fetchData(page, searchQuery, sortBy, sortOrder) {
          $.ajax({
            url: 'layout/fetch_results.php',
            type: 'POST',
            data: {
              page: page,
              recordsPerPage: recordsPerPage,
              searchQuery: searchQuery,
              sortBy: sortBy,
              sortOrder: sortOrder
            },
            dataType: 'json',
            success: function(response) {
              var results = response.results;
              var totalRecords = response.totalRecords;
              var totalPages = Math.ceil(totalRecords / recordsPerPage);
                      
              // Clear the table body
              $('#tableBody').empty();
      
              // Update the table with the fetched data
              for (var i = 0; i < results.length; i++) {
                var row = results[i];
                var tableRow = '<tr>' +
                  '<td>' + row.first_name + '</td>' +
                  '<td>' + row.last_name + '</td>' +
                  '<td>' + row.email + '</td>' +
                  '<td>' + row.gender + '</td>' +
                  '<td>' + row.age + '</td>' +
                  '<td>' + row.date_of_birth + '</td>' +
                  '<td>' + row.address + '</td>' +
                  '<td>' + row.phone_number + '</td>' +
                  '<td>' + row.school_name + '</td>' +
                  '<td>' +
                  '<a href="update.php?id=' + row.id + '"><button type="button" class="btn btn-primary">UPDATE</button></a>' +
                  ' <a href="delete.php?id=' + row.id + '" onclick="return confirm(\'Are you sure to delete?\')"><button type="button" class="btn btn-primary">DELETE</button></a>' +
                  '</td>' +
                  '</tr>';
      
                $('#tableBody').append(tableRow);
              }
      
              // Update the pagination links
              updatePagination(currentPage, totalPages);
            },
            error: function(xhr, status, error) {
              console.error('AJAX Error: ' + status + ' - ' + error);
            }
          });
      
        }
      
        function updatePagination(currentPage, totalPages) {
          var paginationContainer = $('#pagination');
          paginationContainer.empty();
      
          // Previous page link
          if (currentPage > 1) {
            paginationContainer.append('<li class="page-item"><a class="page-link" href="#" id="prev">Previous</a></li>');
          } else {
            paginationContainer.append('<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>');
          }
      
          // Page links
          for (var i = 1; i <= totalPages; i++) {
            if (i === currentPage) {
              paginationContainer.append('<li class="page-item active"><a class="page-link" href="#" id="' + i + '">' + i + '</a></li>');
            } else {
              paginationContainer.append('<li class="page-item"><a class="page-link" href="#" id="' + i + '">' + i + '</a></li>');
            }
          }
         
          // Next page link
          if (currentPage < totalPages) {
            paginationContainer.append('<li class="page-item"><a class="page-link" href="#" id="next">Next</a></li>');
            // exit;
          } else {
            paginationContainer.append('<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Next</a></li>');
          }
        }
      
        // Event listener for page link clicks

        $(document).on('click', '.page-link', function(e) {
          e.preventDefault();
          var pageId = $(this).attr('id');
      
          if (pageId === 'prev' && currentPage > 1) {
            currentPage--;
          } else if (pageId === 'next') {
            currentPage++;
          } else {
            currentPage = parseInt(pageId);
          }
      
          var searchQuery = $('#searchInput').val();
          
          fetchData(currentPage, searchQuery);
          
        });
      
        // Update the function to fetch data based on search input
        function updateData() {
          var searchQuery = $('#searchInput').val();
          currentPage = 1;
          fetchData(currentPage, searchQuery);
        }
      
        $('#searchBtn').on('click', updateData);
      
        // Event listener for keyup in the search input field
        $('#searchInput').on('keyup', function() {
            updateData();
        });
  
        // Variable to track the current sorting column and order
        var currentSortColumn = '';
        var currentSortOrder = 'ASC';
  
        // Variable to track the current sorting column and order
        var currentSortColumn = localStorage.getItem('currentSortColumn') || 'name';
    
        var currentSortOrder = localStorage.getItem('currentSortOrder') || 'ASC';
        
        // Function to handle column sorting on click
        function handleSort(sortBy) {
            var sortOrder = 'ASC';
  
            // If the clicked column is already sorted, toggle the sort order
            if (sortBy === currentSortColumn) {
                sortOrder = currentSortOrder === 'ASC' ? 'DESC' : 'ASC';
            }
  
            currentSortColumn = sortBy;
            currentSortOrder = sortOrder;
  
            // Fetch data with the updated sort parameters
            fetchData(currentPage, $('#searchInput').val(), currentSortColumn, currentSortOrder);
        }
  
        // Event listener for column header clicks
        $('#tableHeaders th.sortable').click(function () {
            var columnName = $(this).data('column');
            handleSort(columnName);
        });
  
        // Fetch data for the initial page
        fetchData(currentPage, '', currentSortColumn, currentSortOrder);   
      });
})    