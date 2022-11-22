pipeline {
    agent any

    stages {
        stage('Clone data from git') {

            steps {
                git branch: "master", url: "https://github.com/teddywafula/php-docker-jenkins-sonarqube.git", credentialsId: "github"
                echo 'Cloned'
            }
        }

        stage('Build') {
            steps {
                script {
                    docker.image('newtmitch/sonar-scanner').inside('-v /var/run/docker.sock:/var/run/docker.sock --entrypoint="" --net host')
                }
                echo "build 2"

            }
        }

        stage('Test') {
            steps {
                echo "Test"
            }
        }

        stage('Deploy') {
            steps {
                echo "Deploy"
            }
        }


    }
}