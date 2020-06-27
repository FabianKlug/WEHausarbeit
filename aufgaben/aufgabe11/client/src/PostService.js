import axios from 'axios';
const url ='http://localhost:5000/api/posts/';

class PostService {
    //get
    static getPosts() {
        return new Promise ((resolve,reject) => {
            axios.get(url).then((res) => {
                const data = res.data;
                resolve(
                    data.map(post => ({
                        ...post,
                        createdAt: new Date(post.createdAt)
                    }))
                );
            })
                .catch((err)=> {
                    reject(err);
                })

        });
    }

    //create
    static insertPost(text) {
        return axios.post(url, {text});
    }

    //delete
    static deletePost(id) {
        return axios.delete(url+`${id}`);
    }
}

export default PostService;