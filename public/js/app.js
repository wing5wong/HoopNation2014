var app = angular.module('hoopnation', []);

app.controller('MainCtrl', function($scope,TeamService,StatService) {

    $scope.teams = TeamService.allTeams;
    $scope.actions = StatService.availableActions

    $scope.selectedPlayer = {}
    $scope.match = {
        homeTeam : undefined,
        awayTeam : undefined
    }

    $scope.initializeMatch = function(){
        if($scope.match.homeTeam && $scope.match.awayTeam){
            $scope.match.active = true;
        }
    }

    $scope.selectPlayer = function(player){
        $scope.selectedPlayer = player;
    }

    $scope.teamScore = function(team){
        return  StatService.scoreForTeam(team)
    }

    $scope.actionClick = function(action,successful){
        var newAction = {}
        newAction.action_id = action.id,
        newAction.player_id = $scope.selectedPlayer.id,
        newAction.team_id = $scope.selectedPlayer.team_id
        newAction.timestamp = new Date()

        if(successful){
            newAction.points = action.points
        }
        StatService.addAction(newAction)

    }
    $scope.name = 'World';
});

app.factory('StatService',function(){
    _gameActions = []
    _gameScores = []
    _actions = {
        shots : [{name : 'Free Throw', points : 1},{name : 'Field Goal', points : 2 },{name : '3 Pointer', points : 3}],
        misses : {},
        skills : {},
        fouls : {},


    }

    var _addAction = function(action){
        _gameActions.push(action)
    }

    return {
        allActions : _gameActions,
        addAction : _addAction,
        availableActions : _actions,
        scoreForTeam : function(team){
            var score = 0
            for (var i = 0; i < _gameActions.length; i++) {
                var _action = _gameActions[i]
                if(_action.team_id == team.id && _action.points){
                    score = score + _action.points
                }
            }
            return score;
        }
    }
})

app.factory('TeamService',function(){
    var _teams = [{
        id : 1,
        name : 'Boston Bulldogs',
        players : [{id : 1, team_id : 1, name : 'Joe'},{id : 2, team_id : 1, name : 'Steve'},{id : 3, team_id : 1, name : 'Fred'}]
    },
    {
        id : 2,
        name : 'Austin Alpacas',
        players : [{id : 4, team_id : 2, name : 'Dave'},{id : 5, team_id : 2, name : 'Dan'},{id : 6, team_id : 2, name : 'Mark'}]
    },{
        id : 3,
        name : 'San Diego Sloths',
        players : [{id : 7, team_id : 3, name : 'Alex'},{id : 8, team_id : 3, name : 'Frank'},{id : 9, team_id : 3, name : 'Jon'}]
    }]

    return {
        allTeams : _teams
    }

})
