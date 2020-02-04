    <!-- Show modal content -->
    <div id="showModal-{{ $row->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">{{ $title }} Details View</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <!-- Details View Start -->
                    <h4><span class="text-highlight">Provider:</span> {{ $row->provider->title }}</h4>
                    <hr/>
                    
                    <div class="table-responsive">
                      <table id="basic-datatable" class="table table-border table-hover nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Uptime</td>
                                <td>{{ $row->uptime }}</td>
                            </tr>
                            <tr>
                                <td>Speed</td>
                                <td>{{ $row->speed }}</td>
                            </tr>
                            <tr>
                                <td>Support</td>
                                <td>{{ $row->support }}</td>
                            </tr>
                            <tr>
                                <td>Data Center</td>
                                <td>{{ $row->data_center }}</td>
                            </tr>
                            <tr>
                                <td>Cpanel</td>
                                <td>{{ $row->cpanel }}</td>
                            </tr>
                            <tr>
                                <td>Database</td>
                                <td>{{ $row->database }}</td>
                            </tr>
                            <tr>
                                <td>Backup</td>
                                <td>{{ $row->backup }}</td>
                            </tr>
                            <tr>
                                <td>Migration</td>
                                <td>{{ $row->migration }}</td>
                            </tr>
                            <tr>
                                <td>Site Transfer</td>
                                <td>{{ $row->site_transfer }}</td>
                            </tr>
                            <tr>
                                <td>Security</td>
                                <td>{{ $row->security }}</td>
                            </tr>
                            <tr>
                                <td>Guarantee</td>
                                <td>{{ $row->guarantee }}</td>
                            </tr>
                            <tr>
                                <td>Pay Method</td>
                                <td>{{ $row->pay_method }}</td>
                            </tr>
                        </tbody>
                      </table>
                    </div>

                    <hr/>
                    <p><span class="text-highlight">Status:</span> 
                    @if( $row->status == 1 )
                    <span class="badge badge-success badge-pill">Active</span>
                    @else
                    <span class="badge badge-danger badge-pill">Inactive</span>
                    @endif
                    </p>
                    <!-- Details View End -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->