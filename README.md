Approach to scale up to 100,000 users in 4.5hours

1. Queues in Laravel are used to make a smooth sailing application cycle by stacking heavy tasks to be handled as jobs and dispatching these jobs when it is asked to or when it does not disrupt the user's experience.Use of Queues will help optimize the app performance as this task is a relatively heavy one.

2.The chunk method which was used in looping through users table breaks a collection into multiple, smaller collections of a given size  thereby reducing the number of collections in memory at each time the loop runs  which means that at no point there is a huge amount of data taken from the database – you are working with a chunk of entries, not the whole table.
 
