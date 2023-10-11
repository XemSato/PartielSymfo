# PartielSymfo

Diagramme : 
    +---------------------+
    |       User        |
    +---------------------+
    | id: int           |
    | email: string     |
    | password: string  |
    | firstName: string |
    | lastName: string  |
    |                   |
    | + createPost()    |
    | + commentPost()   |
    | + likeDislike()   |
    +---------------------+
           | ^
           | |    
           v |
    +---------------------+
    |       Post        |
    +---------------------+
    | id: int           |
    | content: text     |
    | createdAt: datetime|
    | images: string[]  |
    |                   |
    | + author: User    |
    +---------------------+
       |      |
       |      |
       v      v
    +---------------------+
    |     Comment       |
    +---------------------+
    | id: int           |
    | content: text     |
    | createdAt: datetime|
    |                   |
    | + post: Post      |
    | + author: User    |
    +---------------------+
           |
           |
           v
    +---------------------+
    |       Like        |
    +---------------------+
    | id: int           |
    | type: enum('like',|
    |             'dislike')|
    |                   |
    | + post: Post      |
    | + user: User      |
    +---------------------+
           |
           v
    +---------------------+
    |      Group        |
    +---------------------+
    | id: int           |
    | name: string      |
    | description: text |
    | createdAt: datetime|
    |                   |
    | + owner: User     |
    | + members: User[] |
    |                   |
    | + createGroupPost()|
    +---------------------+
           |
           |
           v
    +---------------------+
    |   GroupPost       |
    +---------------------+
    | id: int           |
    | content: text     |
    | createdAt: datetime|
    | images: string[]  |
    |                   |
    | + group: Group    |
    +---------------------+
