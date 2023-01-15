node {   
    stage('Clone repository') {
        git credentialsId: 'github', branch: 'main', url: 'https://github.com/nadi104/myflix'
    }
    
    stage('Build image') {
       dockerImage = docker.build("ashinidundee/demo:latest")
    }
    
 stage('Push image') {
        withDockerRegistry([ credentialsId: "docker-hub", url: "https://hub.docker.com" ]) {
        dockerImage.push()
        }
    }    
}
