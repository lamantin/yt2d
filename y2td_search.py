#python3
import sys
import json

from youtubesearchpython import VideosSearch
youtube_video_string = ' '.join(sys.argv[1:])
videosSearch = VideosSearch(youtube_video_string, limit = 2)

print(json.dumps(videosSearch.result()))
