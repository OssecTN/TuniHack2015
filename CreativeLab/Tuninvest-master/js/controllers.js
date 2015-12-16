var app = angular.module('Controllers',['ngRoute']);



//controlleur du page login
 app.controller("homeControl",function($scope, $location , $window,$http){
        
$scope.category = [{name:'Education',count:0},
                   {name: 'Govermant',count:0},
                   {name: 'Charity',count:0},
                   {name: 'Terrorism',count:0},
                   {name: 'Social Issue',count:0},
                   {name: 'Terrorism',count:0},
                   {name: 'Transport',count:0}];
$scope.bestproject = {name: 'Education needs',subject: 'Help these children with a small contribution to ensure a proper education',imageURL: "images/education.jpg",goal:200,current:175,bankers:200,addedby:'acamar',category:'Education'};


$scope.projects = [{name: 'Education needs',subject: 'Help these children with a small contribution to ensure a proper education',imageURL: "images/education.jpg",goal:200,current:175,bankers:145,addedby:'acamar',category:'Education'},
{name: 'Charity needs',subject: 'helping peaple in need will put a smile on their face',imageURL: "images/charity.jpg",goal:522,current:345,bankers:244,addedby:'acamar',category:'Charity'},
{name: 'Social issue',subject: "Every one has his own problem,let's help them, we might need their help one day",imageURL: "images/social.jpg",goal:270,current:195,bankers:345,addedby:'acamar',category:'Social Issue'},
{name: 'Education needs',subject: 'Help these children with a small contribution to ensure a proper education',imageURL: "images/education.jpg",goal:200,current:175,bankers:145,addedby:'acamar',category:'Education'}];
$scope.projects.forEach(function(item){
$scope.category.forEach(function(item1){
	if(item1.name == item.category){
		item1.count++;
	}
})
});
$scope.menu = [{name:'Home'},{name:'Category'},{name:'Contact'},{name:'Submit'}];
$scope.changePath = function(x){
	$location.path('/Category/'+x);

}

$scope.perc = function(n){
	return Math.floor(n);
}
$scope.login = function(x,y){


	$scope.users = $http.get('phpfiles/users.php?email='+x+"&mp="+y);
  $scope.users.then(function(result){
     console.log(result.data);
  })
}

 $scope.selectproject = function(x){
    $location.path('/project/'+x);
   } 
        
 });

 app.controller("CategoryControl",function($scope,$routeParams, $location , $window,$http){
        
$scope.category = [{name:'Education',count:0,id:1},
                   {name: 'Govermant',count:0,id:7},
                   {name: 'Charity',count:0,id:2},
                   {name: 'Terrorism',count:0,id:3},
                   {name: 'Social Issue',count:0,id:4},
                   {name: 'Terrorism',count:0,id:5},
                   {name: 'Transport',count:0,id:6}];
$scope.bestproject = {id:1,name: 'Education needs',subject: 'Help these children with a small contribution to ensure a proper education',imageURL: "images/education.jpg",goal:200,current:175,bankers:200,addedby:'acamar',category:'Education'};


$scope.projects = [{id:1,show:true,name: 'Education needs',subject: 'Help these children with a small contribution to ensure a proper education',imageURL: "images/education.jpg",goal:200,current:175,bankers:145,addedby:'acamar',category:'Education'},
{id:2,name: 'Charity needs',show:true,subject: 'helping peaple in need will put a smile on their face',imageURL: "images/charity.jpg",goal:522,current:345,bankers:244,addedby:'acamar',category:'Charity'},
{id:3,name: 'Social issue',show:true,subject: "Every one has his own problem,let's help them, we might need their help one day",imageURL: "images/social.jpg",goal:270,current:195,bankers:345,addedby:'acamar',category:'Social Issue'},
{id:4,name: 'Education needs',show:true,subject: 'Help these children with a small contribution to ensure a proper education',imageURL: "images/education.jpg",goal:200,current:175,bankers:145,addedby:'acamar',category:'Education'}];
$scope.projects.forEach(function(item){
$scope.category.forEach(function(item1){
	if(item1.name == item.category){
		item1.count++;
	}
})
});
$scope.menu = [{name:'Home'},{name:'Category'},{name:'Contact'},{name:'Submit'}];
$scope.changePath = function(x){
	console.log(x);

}

$scope.perc = function(n){
	return Math.floor(n);
}
$scope.fil = "";
$scope.login = function(x,y){


	$scope.users = {name:'acamar',email : 'acamar@gmail.com',password : 'acamar'};
	$scope.publicuser = $scope.users;
	console.log((x == $scope.users.email) && (y == $scope.users.password));
	if(x == $scope.users.email && y == $scope.users.password){

          $scope.access = true;
	}
}
if($routeParams.id){
       $scope.fil = $routeParams.id;
 }  
$scope.changeCategory = function(x){
	$location.path('/Category/'+x);
 	if($routeParams.id){
       $scope.fil = $routeParams.id;
 }  
}
   $scope.selectproject = function(x){
   	$location.path('/project/'+x);
   }  

  $scope.changeCategory = function(x){
  $location.path('/Category/'+x);
  if($routeParams.id){
       $scope.fil = $routeParams.id;
 }  
}
 });


 app.controller("ProjectControl",function($scope,$routeParams, $location , $window,$http){
        
$scope.category = [{name:'Education',count:0,id:1},
                   {name: 'Govermant',count:0,id:7},
                   {name: 'Charity',count:0,id:2},
                   {name: 'Terrorism',count:0,id:3},
                   {name: 'Social Issue',count:0,id:4},
                   {name: 'Terrorism',count:0,id:5},
                   {name: 'Transport',count:0,id:6}];
$scope.bestproject = {id:1,name: 'Education needs',subject: 'Help these children with a small contribution to ensure a proper education',imageURL: "images/education.jpg",goal:200,current:175,bankers:200,addedby:'acamar',category:'Education'};


$scope.projects = [{id:1,show:true,name: 'Education needs',subject: 'Help these children with a small contribution to ensure a proper education',imageURL: "images/education.jpg",goal:200,current:175,bankers:145,addedby:'acamar',category:'Education'},
{id:2,name: 'Charity needs',show:true,subject: 'helping peaple in need will put a smile on their face',imageURL: "images/charity.jpg",goal:522,current:345,bankers:244,addedby:'acamar',category:'Charity'},
{id:3,name: 'Social issue',show:true,subject: "Every one has his own problem,let's help them, we might need their help one day",imageURL: "images/social.jpg",goal:270,current:195,bankers:345,addedby:'acamar',category:'Social Issue'},
{id:4,name: 'Education needs',show:true,subject: 'Help these children with a small contribution to ensure a proper education',imageURL: "images/education.jpg",goal:200,current:175,bankers:145,addedby:'acamar',category:'Education'}];
$scope.projects.forEach(function(item){
$scope.category.forEach(function(item1){
	if(item1.name == item.category){
		item1.count++;
	}
})
});
$scope.menu = [{name:'Home'},{name:'Category'},{name:'Contact'},{name:'Submit'}];
$scope.changepath = function(x){
	$location.path("/"+x);
}

$scope.perc = function(n){
	return Math.floor(n);
}
$scope.fil = "";
$scope.login = function(x,y){


	$scope.users = {name:'acamar',email : 'acamar@gmail.com',password : 'acamar'};
	$scope.publicuser = $scope.users;
	console.log((x == $scope.users.email) && (y == $scope.users.password));
	if(x == $scope.users.email && y == $scope.users.password){

          $scope.access = true;
	}
}

$scope.changeCategory = function(x){
	$location.path('/Category/'+x);
 	if($routeParams.id){
       $scope.fil = $routeParams.id;
 }  
}
   $scope.selectproject = function(x){
   	$location.path('/project/'+x);
   }  


$scope.project = {};
if($routeParams.id){
       $scope.projects.forEach(function(item){
            if(item.id == $routeParams.id){
                $scope.project = item;
            }
       });
}  


 });



 app.controller("CategoryControl",function($scope,$routeParams, $location , $window,$http){
        
$scope.category = [{name:'Education',count:0,id:1},
                   {name: 'Govermant',count:0,id:7},
                   {name: 'Charity',count:0,id:2},
                   {name: 'Terrorism',count:0,id:3},
                   {name: 'Social Issue',count:0,id:4},
                   {name: 'Terrorism',count:0,id:5},
                   {name: 'Transport',count:0,id:6}];
$scope.bestproject = {id:1,name: 'Education needs',subject: 'Help these children with a small contribution to ensure a proper education',imageURL: "images/education.jpg",goal:200,current:175,bankers:200,addedby:'acamar',category:'Education'};


$scope.projects = [{id:1,show:true,name: 'Education needs',subject: 'Help these children with a small contribution to ensure a proper education',imageURL: "images/education.jpg",goal:200,current:175,bankers:145,addedby:'acamar',category:'Education'},
{id:2,name: 'Charity needs',show:true,subject: 'helping peaple in need will put a smile on their face',imageURL: "images/charity.jpg",goal:522,current:345,bankers:244,addedby:'acamar',category:'Charity'},
{id:3,name: 'Social issue',show:true,subject: "Every one has his own problem,let's help them, we might need their help one day",imageURL: "images/social.jpg",goal:270,current:195,bankers:345,addedby:'acamar',category:'Social Issue'},
{id:4,name: 'Education needs',show:true,subject: 'Help these children with a small contribution to ensure a proper education',imageURL: "images/education.jpg",goal:200,current:175,bankers:145,addedby:'acamar',category:'Education'}];
$scope.projects.forEach(function(item){
$scope.category.forEach(function(item1){
	if(item1.name == item.category){
		item1.count++;
	}
})
});
$scope.menu = [{name:'Home'},{name:'Category'},{name:'Contact'},{name:'Submit'}];
$scope.changePath = function(x){
	console.log(x);

}

$scope.perc = function(n){
	return Math.floor(n);
}
$scope.fil = "";
$scope.login = function(x,y){


	$scope.users = {name:'acamar',email : 'acamar@gmail.com',password : 'acamar'};
	$scope.publicuser = $scope.users;
	console.log((x == $scope.users.email) && (y == $scope.users.password));
	if(x == $scope.users.email && y == $scope.users.password){

          $scope.access = true;
	}
}
if($routeParams.id){
       $scope.fil = $routeParams.id;
 }  
$scope.changeCategory = function(x){
	$location.path('/Category/'+x);
 	if($routeParams.id){
       $scope.fil = $routeParams.id;
 }  
}
   $scope.selectproject = function(x){
   	$location.path('/project/'+x);
   }  

  
 });


app.controller("submitControl",function($scope,$routeParams, $location , $window,$http){
        
$scope.category = [{name:'Education',count:0,id:1},
                   {name: 'Govermant',count:0,id:7},
                   {name: 'Charity',count:0,id:2},
                   {name: 'Terrorism',count:0,id:3},
                   {name: 'Social Issue',count:0,id:4},
                   {name: 'Terrorism',count:0,id:5},
                   {name: 'Transport',count:0,id:6}];
$scope.bestproject = {id:1,name: 'Education needs',subject: 'Help these children with a small contribution to ensure a proper education',imageURL: "images/education.jpg",goal:200,current:175,bankers:200,addedby:'acamar',category:'Education'};


$scope.projects = [{id:1,show:true,name: 'Education needs',subject: 'Help these children with a small contribution to ensure a proper education',imageURL: "images/education.jpg",goal:200,current:175,bankers:145,addedby:'acamar',category:'Education'},
{id:2,name: 'Charity needs',show:true,subject: 'helping peaple in need will put a smile on their face',imageURL: "images/charity.jpg",goal:522,current:345,bankers:244,addedby:'acamar',category:'Charity'},
{id:3,name: 'Social issue',show:true,subject: "Every one has his own problem,let's help them, we might need their help one day",imageURL: "images/social.jpg",goal:270,current:195,bankers:345,addedby:'acamar',category:'Social Issue'},
{id:4,name: 'Education needs',show:true,subject: 'Help these children with a small contribution to ensure a proper education',imageURL: "images/education.jpg",goal:200,current:175,bankers:145,addedby:'acamar',category:'Education'}];
$scope.projects.forEach(function(item){
$scope.category.forEach(function(item1){
	if(item1.name == item.category){
		item1.count++;
	}
})
});
$scope.menu = [{name:'Home'},{name:'Category'},{name:'Contact'},{name:'Submit'}];
$scope.changePath = function(x){
	console.log(x);

}

$scope.perc = function(n){
	return Math.floor(n);
}
$scope.fil = "";
$scope.login = function(x,y){


	$scope.users = {name:'acamar',email : 'acamar@gmail.com',password : 'acamar'};
	$scope.publicuser = $scope.users;
	console.log((x == $scope.users.email) && (y == $scope.users.password));
	if(x == $scope.users.email && y == $scope.users.password){

          $scope.access = true;
	}
}
if($routeParams.id){
       $scope.fil = $routeParams.id;
 }  
$scope.changeCategory = function(x){
	$location.path('/Category/'+x);
 	if($routeParams.id){
       $scope.fil = $routeParams.id;
 }  
}
   $scope.selectproject = function(x){
   	$location.path('/project/'+x);
   }  

  
 });


app.controller("contactControl",function($scope,$routeParams, $location , $window,$http){
        
$scope.category = [{name:'Education',count:0,id:1},
                   {name: 'Govermant',count:0,id:7},
                   {name: 'Charity',count:0,id:2},
                   {name: 'Terrorism',count:0,id:3},
                   {name: 'Social Issue',count:0,id:4},
                   {name: 'Terrorism',count:0,id:5},
                   {name: 'Transport',count:0,id:6}];
$scope.bestproject = {id:1,name: 'Education needs',subject: 'Help these children with a small contribution to ensure a proper education',imageURL: "images/education.jpg",goal:200,current:175,bankers:200,addedby:'acamar',category:'Education'};


$scope.projects = [{id:1,show:true,name: 'Education needs',subject: 'Help these children with a small contribution to ensure a proper education',imageURL: "images/education.jpg",goal:200,current:175,bankers:145,addedby:'acamar',category:'Education'},
{id:2,name: 'Charity needs',show:true,subject: 'helping peaple in need will put a smile on their face',imageURL: "images/charity.jpg",goal:522,current:345,bankers:244,addedby:'acamar',category:'Charity'},
{id:3,name: 'Social issue',show:true,subject: "Every one has his own problem,let's help them, we might need their help one day",imageURL: "images/social.jpg",goal:270,current:195,bankers:345,addedby:'acamar',category:'Social Issue'},
{id:4,name: 'Education needs',show:true,subject: 'Help these children with a small contribution to ensure a proper education',imageURL: "images/education.jpg",goal:200,current:175,bankers:145,addedby:'acamar',category:'Education'}];
$scope.projects.forEach(function(item){
$scope.category.forEach(function(item1){
  if(item1.name == item.category){
    item1.count++;
  }
})
});
$scope.menu = [{name:'Home'},{name:'Category'},{name:'Contact'},{name:'Submit'}];
$scope.changePath = function(x){
  console.log(x);

}

$scope.perc = function(n){
  return Math.floor(n);
}
$scope.fil = "";
$scope.login = function(x,y){


  $scope.users = {name:'acamar',email : 'acamar@gmail.com',password : 'acamar'};
  $scope.publicuser = $scope.users;
  console.log((x == $scope.users.email) && (y == $scope.users.password));
  if(x == $scope.users.email && y == $scope.users.password){

          $scope.access = true;
  }
}
if($routeParams.id){
       $scope.fil = $routeParams.id;
 }  
$scope.changeCategory = function(x){
  $location.path('/Category/'+x);
  if($routeParams.id){
       $scope.fil = $routeParams.id;
 }  
}
   $scope.selectproject = function(x){
    $location.path('/project/'+x);
   }  

  
 });