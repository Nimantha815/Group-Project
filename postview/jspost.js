//comment section is brought to view - when the comment icon is clicked
        document.getElementById("comments-list").addEventListener("click", function() {
            document.getElementById("comment-section").style.display = "block";
        });




        //likes add and remove - increase count
        var count = 0;
        var clickCount = 0;
        var previousCount = 5;
        document.getElementById("likes-counter").innerHTML = previousCount;
        document.getElementById("likes").addEventListener("click", function() {
            clickCount = clickCount + 1;
            if (clickCount % 2 == 0) {
                var testing1 = document.getElementsByClassName("fa-heart")[0];
                testing1.className = "fa fa-heart-o"
                testing1.style.color = "black";
                document.getElementById("likes-color").style.color = "black";
                document.getElementById("likes-counter").innerHTML = previousCount;
            } else {
                var testing = document.getElementsByClassName("fa-heart-o")[0];
                testing.className = "fa fa-heart"
                testing.style.color = "red";
                document.getElementById("likes-counter").innerHTML = previousCount + 1;

            }
            count = count + 1;
        });





        //activate the text area
        var comments = document.getElementById("comment-section").getElementsByClassName("user-avatar-thumbnail");
        document.getElementById("comment-count").innerHTML = comments.length;
        document.getElementById("add-comment").addEventListener("click", function() {
            createComments();
        });


        function createComments() {
            document.getElementById("enter-comments").style.display = "block";
            //append the new edit to comment list
            var storeDiv = document.createElement("DIV");
            var outerDiv = document.createElement("DIV");
            var att = document.createAttribute("class");
            att.value = "user-avatar-thumbnail left-position";
            outerDiv.setAttributeNode(att);

            var avatarImg = document.createElement("IMG");
            avatarImg.src = "https://images.unsplash.com/photo-1461353789837-8eb180f968d2?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=&bg=";
            outerDiv.appendChild(avatarImg);
            var attImg = document.createAttribute("class");
            attImg.value = "left-position";
            avatarImg.setAttributeNode(attImg);

            var altAttr = document.createAttribute("alt");
            altAttr.value = "avatar-thumbnail";
            avatarImg.setAttributeNode(altAttr);
            outerDiv.appendChild(avatarImg);

            var avatarName = document.createElement("H5");
            var avatarNameContent = document.createTextNode("ME");
            var attImg = document.createAttribute("class");
            attImg.value = "left-position";
            avatarName.setAttributeNode(attImg);
            avatarName.appendChild(avatarNameContent);
            outerDiv.appendChild(avatarName);

            var textRegion = document.createElement("TEXTAREA");
            var textId = document.createAttribute("id");
            textId.value = "comment-area";
            textRegion.setAttributeNode(textId);
            outerDiv.appendChild(textRegion);

            var postCommentButton = document.createElement("BUTTON");
            var postCommentButtonValue = document.createTextNode("Post");
            postCommentButton.appendChild(postCommentButtonValue);
            var createIDPost = document.createAttribute("id");
            createIDPost.value = "post-comment";
            postCommentButton.setAttributeNode(createIDPost);
            postCommentButton.appendChild(postCommentButtonValue);

            
            
            /*this is one method*/
            /*postCommentButton.innerHTML = "POST";
            /*postCommentButton.onclick = function(){
              //var enteredComment = document.getElementsByTagName("textarea").innerHTML;
              //if (enteredComment===""){
                alert("please enter your comment");
              //}
            };*/


            postCommentButton.addEventListener("click", function() {
                var commentsGiven = textRegion.value;
                if (commentsGiven.length < 1) {
                    alert("please enter your comment");
                } else {
                    document.getElementById("comment-section").appendChild(outerDiv);
                    document.getElementById("comment-section").style.display = "block";
                    document.getElementById("enter-comments").style.display = "none";
                    outerDiv.removeChild(cancelCommentButton);
                    outerDiv.removeChild(postCommentButton);
                    var commentPara = document.createElement("P");
                    commentPara.innerHTML = commentsGiven;
                    var attrComment = document.createAttribute("class");
                    attrComment.value = "left-position DescriptionExcerpt";
                    commentPara.setAttributeNode(attrComment);
                    outerDiv.appendChild(commentPara);
                    outerDiv.removeChild(textRegion);

                    var iconDeletes = document.createElement("A");
                    iconDeletes.href = "#";
                    var iconDeleteClass = document.createAttribute("class");
                    iconDeleteClass.value = "right-position delete-comment";
                    iconDeletes.setAttributeNode(iconDeleteClass);

                    var iconDeletesI = document.createElement("I");
                    var iconDeleteClassI = document.createAttribute("class");
                    iconDeleteClassI.value = "fa fa-close likes-color";
                    iconDeletesI.setAttributeNode(iconDeleteClassI);
                    iconDeletes.appendChild(iconDeletesI);
                    outerDiv.appendChild(iconDeletes);

                    var iconEdit = document.createElement("A");
                    iconEdit.href = "#";
                    var iconEditClass = document.createAttribute("class");
                    iconEditClass.value = "right-position edit-comment";
                    iconEdit.setAttributeNode(iconEditClass);

                    var iconEditI = document.createElement("I");
                    var iconEditClassI = document.createAttribute("class");
                    iconEditClassI.value = "fa fa-pencil-square-o likes-color-edit";
                    iconEditI.setAttributeNode(iconEditClassI);
                    iconEdit.appendChild(iconEditI);
                    outerDiv.appendChild(iconEdit);

                }

                var iconCount = document.getElementsByClassName("delete-comment");
                document.getElementById("comment-count").innerHTML = 3 + iconCount.length;
                for (var a = 0; a < iconCount.length; a++) {
                    iconCount[a].addEventListener('click', redirects, false);

                }

                function redirects() {
                    var elem = this;
                    elem.parentNode.remove();
                    var iconCount2 = document.getElementsByClassName("delete-comment");
                    document.getElementById("comment-count").innerHTML = 3 + iconCount2.length;
                }

                var iconCount2 = document.getElementsByClassName("edit-comment");
                for (var b = 0; b < iconCount2.length; b++) {
                    iconCount2[b].addEventListener('click', redirect, true);
                }

                function redirect() {
                    var elem2 = this;
                    var goesd = elem2.previousSibling.previousSibling.innerHTML;
                    var textRegion2 = document.createElement("TEXTAREA");
                    var texts = document.createTextNode(goesd);
                    if (texts.length > 0) {
                        textRegion2.appendChild(texts);
                        outerDiv.appendChild(textRegion2);

                        elem2.previousSibling.previousSibling.innerHTML = "";
                        elem2.previousSibling.style.display = "none";
                        elem2.style.display = "none";


                        var postCommentButtons = document.createElement("BUTTON");
                        var postCommentButtonValues = document.createTextNode("Post");
                        postCommentButtons.appendChild(postCommentButtonValues);
                        outerDiv.appendChild(postCommentButtons);

                        postCommentButtons.onclick = function() {
                            elem2.previousSibling.previousSibling.innerHTML = textRegion2.value;
                            elem2.style.display = "block";
                            elem2.previousSibling.style.display = "block";
                            elem2.nextSibling.remove();
                            postCommentButtons.remove();
                        };

                    }
                };

            });


            outerDiv.appendChild(postCommentButton);


            var cancelCommentButton = document.createElement("A");
            cancelCommentButton.href = "#";
            var createIDCancel = document.createAttribute("id");
            createIDCancel.value = "cancel-comment";
            cancelCommentButton.setAttributeNode(createIDCancel);
            var cancelCommentButtonValue = document.createTextNode("Cancel");
            cancelCommentButton.appendChild(cancelCommentButtonValue);
            outerDiv.appendChild(cancelCommentButton);

            cancelCommentButton.onclick = function() {
                this.parentNode.remove();
            };

            document.getElementById("enter-comments").appendChild(outerDiv);


        };